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
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        // $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        // $posts = DB::table('posts')->paginate(10);
        $posts = Post::orderBy('id','desc')->paginate(10);
                 
        $directmessages = $user->directmessages()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'user' => $user,
            'posts' => $posts,
            'directmessages' => $directmessages,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
}
