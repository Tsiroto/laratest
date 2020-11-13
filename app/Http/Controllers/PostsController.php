<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('posts', [
            'posts' => [
                'This is the first post.',
                'This is the second post. This is nuts.',
                'This is the last post.',
                'Hey, I lied about the last one.',
                'I really did.'
                ]
            ]);
    }

    public function hello($name) {
        return "Hello $name";
    }

    public function newpost() {
        return view('newpost');
    }
}

