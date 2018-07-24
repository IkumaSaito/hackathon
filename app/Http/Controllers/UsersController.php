<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

use App\Post;

use JD\Cloudder\Facades\Cloudder;
use App\Plan;

class UsersController extends Controller
{
   public function index()
    {
    if (\Auth::check()){
        $user = \Auth::user();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        $id = $user->id;
        $plans = Plan::where('user_id', $id)->get();
        
        $data = [
            'user' => $user,
            'posts' => $posts,
            'plans' => $plans,
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
        $plans = Plan::where('user_id', $id)->get();
        
                 
        $data = [
            'user' => $user,
            'posts' => $posts,
            'plans' => $plans,
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

    public function avataredit($id)
    {
        $user = user::find($id);
        
        if (\Auth::id() === $user->id){ 

        return view('users.avataredit', [
            'user' => $user,
        ]);
    }
        return redirect('/');
    }
    
    public function upload(Request $request)
    {
        $user =\Auth::user();
        $this->validate($request, [
             'file' => [ 
                'required','file',
                ]
            ]);
        if ($request->file('file')->isValid([])) {
            
            Cloudder::upload($request->file('file'));
            $url = Cloudder::getResult()['url'];
            $user->avatar_filename = $url;
            $user->save();

            return redirect('/');
        } else {
            
            return redirect()
                 ->back()
                 ->withInput()
                 ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
    
    public function intro(){
        return view ('users.intro');
    }
    

     public function introja(){
        return view ('users.introja');
    }
    
    
    
     public function explain(){
            if (\Auth::check()){
        $user = \Auth::user();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        $id = $user->id;
        $plans = Plan::where('user_id', $id)->get();
        
        $data = [
            'user' => $user,
            'posts' => $posts,
            'plans' => $plans,
        ];

        
        $data += $this->counts($user);
            return view('users.explain', $data);
        } else {
            return view('welcome');

        }
    }
    
     public function explain2(){
        if (\Auth::check()){
        $user = \Auth::user();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        $id = $user->id;
        $plans = Plan::where('user_id', $id)->get();
        
        $data = [
            'user' => $user,
            'posts' => $posts,
            'plans' => $plans,
        ];

        
        $data += $this->counts($user);
            return view('users.explain', $data);
        } else {
            return view('welcome');

        }
    }
    
     public function concept(){
        if (\Auth::check()){
        $user = \Auth::user();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        $id = $user->id;
        $plans = Plan::where('user_id', $id)->get();
        
        $data = [
            'user' => $user,
            'posts' => $posts,
            'plans' => $plans,
        ];

        
        $data += $this->counts($user);
            return view('users.explain', $data);
        } else {
            return view('welcome');

        }
    }
    
    
         public function welcome(){
        return view ('welcome');
    }
    
}

