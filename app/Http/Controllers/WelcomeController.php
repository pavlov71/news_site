<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index_main()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('welcome', compact('posts' ));
    }

    public function index()
    {
        $posts = Post::query()->orderBy('id', 'DESC')->paginate(3);
        return view('welcome', compact('posts'));
    }

    public function show(Request $request, Post $post)
    {
        $comments = $post->comments;
        return view ('posts_show', compact('post', 'comments') );
    }
}
