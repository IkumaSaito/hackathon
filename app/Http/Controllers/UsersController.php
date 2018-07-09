<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
   public function index()
    {
    if (\Auth::check()){
        $user = \Auth::user();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'posts' => $posts,
        ];

        $data += $this->counts($user);
        return view('users.show', $data);
        }else{
        return view('welcome');
        }
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'posts' => $posts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
     public function edit($id)
    {
        $user = user::find($id);

        return view('users.edit', [
            'user' => $user,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->hobby = $request->hobby;
        $user->language = $request->language;
        $user->intro = $request->intro;
        $user->save();

        return redirect('/');
    }
    
    public function upload(Request $request)
    {
       
        $this->validate($request, [
             'file' => [ 
                'required','file',
           // 最小縦横120px 最大縦横400px
            'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
        ]
     ]);

        if ($request->file('file')->isValid([])) {
            
            $filename = $request->file->store('public/avatar');

            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();

            return redirect()
                 ->back()
                 ->with('success', 'Upload succeed。');
        } else {
            
            return redirect()
                 ->back()
                 ->withInput()
                 ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}