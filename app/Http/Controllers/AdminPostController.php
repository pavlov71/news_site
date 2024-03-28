<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->orderByDesc('id')->paginate(7);

        return view('admin.admin_dashboard', compact('posts'));
    }
}
