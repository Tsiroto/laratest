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

    public function newpost(Request $request) {
        if ($request->method() == 'POST'){
            echo $request->get('title');
            echo $request->get('body');
        };
        return view('newpost');
    }

    public function search(Request $request) {
        $q = $request->get('q', 'Not Found');
        if (!$request->filled('q')) $q = 'No Search';
        return view('search', ['q' => $q]);
    }
}

