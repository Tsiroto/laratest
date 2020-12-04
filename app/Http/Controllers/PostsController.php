<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function newpost(Request $request) {
        if ($request->method() == 'POST'){
            $post = new POST();
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            if ($post->save()){
                echo "Your post has been published!";
                return redirect('/posts');
            };
        };
        return view('newpost');
    }

    public function search(Request $request) {
        $q = $request->get('q', 'Not Found');
        if (!$request->filled('q')) $q = 'No Search';
        return view('search', ['q' => $q]);
    }
}

