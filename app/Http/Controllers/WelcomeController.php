<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index_main()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();
        $pagination = false;
        return view('welcome', compact('posts', 'pagination'));
    }

    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->paginate(3);
        $pagination = true;
        return view('welcome', compact('posts', 'pagination'));
    }

    public function show(Request $request, Post $post)
    {
        return view ('posts_show', );
    }
}
