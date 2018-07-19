<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
     public function index()
    {
         $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $posts = Post::orderBy('id','desc')->paginate(10);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
            $data += $this->counts($user);

        return view('posts.index', $data);

        }else {
            return view('welcome');
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->posts()->create([
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        $post = \App\Post::find($id);

        if (\Auth::id(1)) {
            $post->delete();
        }
        elseif(\Auth::id() === $post->user_id){
            $post->delete();
        }
        return redirect()->back();
    }
}
