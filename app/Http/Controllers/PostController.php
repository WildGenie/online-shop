<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Post;

class PostController extends Controller
{
    public function show(PostFilter $request)
    {

        $posts = Post::filter($request)->paginate(10);

        return view('blog', [
            'title' => 'News',
            'posts' => $posts
        ]);
    }

    public function showSingle(Post $post)
    {
        return view('single-blog', [
            'title' => 'News',
            'posts' => Post::latest()->get(),
            'post' => $post
        ]);
    }
}
