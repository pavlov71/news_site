<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderByDesc('id')->paginate(7);

        return view('admin.admin_dashboard', compact('posts'));
    }

    public function create()
    {
        return view('admin.post_create');
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();

        if (isset($data['thumbnail'])) {
            $filename = $data['thumbnail']->store('posts', 'public');
            $data['thumbnail'] = substr($filename, 6);
        }

        Post::query()->create($data);
        return redirect(route('posts.index'));
    }

    public function edit(Post $post)
    {
        return view('admin.post_edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();

        if (isset($data['thumbnail'])) {
            $filename = $data['thumbnail']->store('posts', 'public');
            $data['thumbnail'] = substr($filename, 6);
        }

        $post->update($data);
        return redirect(route('posts.index'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
