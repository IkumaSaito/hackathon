<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

use App\Post;

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
        } else {
            return view('welcome');

        }
    }
    


    public function show($id)
    {
         if (\Auth::check()){    
        $user = User::find($id);
        $posts = Post::orderBy('id','desc')->paginate(10);
                 
        $data = [
            'user' => $user,
            'posts' => $posts,
        ];

        $data += $this->counts($user);
        
        return view('users.show', $data);
     } else {
        return view('/');
            }
    }



    public function edit($id)
    {
        $user = user::find($id);

        
        if (\Auth::id() === $user->id){ 

        return view('users.edit', [
            'user' => $user,
        ]);
    }
        return redirect('/');
    }
    
    
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required|max:191', 
            'gender' =>'max:191',
            'hobby' => 'max:191',
            'language' => 'max:191',
            'intro' => 'max:191',
        ]);
        
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
                ]
            ]);
        if ($request->file('file')->isValid([])) {
            
            $filename = $request->file->store('public/avatar');
            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();

            return redirect()
                 ->back()
                 ->with('success', 'Upload succeed');
        } else {
            
            return redirect()
                 ->back()
                 ->withInput()
                 ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}

