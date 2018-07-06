<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

        return view('user.edit', [
            'user' => $user,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->hobby = $request->hobby;
        $user->language = $request->language;
        $user->intro = $request->intro;
        $user->save();

        return redirect('/');
    }
}
