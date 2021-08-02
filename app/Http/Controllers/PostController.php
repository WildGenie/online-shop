<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Post;

class PostController extends Controller
{
    public function show(PostFilter $request)
    {

        $posts = Post::filter($request)->paginate(8);

        return view('blog', [
            'title' => 'News',
            'posts' => $posts
        ]);
    }

    public function showSingle(Post $post)
    {

        $previous = Post::where('id', $post->id - 1)->first();
        $next = Post::where('id', $post->id + 1)->first();

        if ($previous == null) {
            $previous = Post::where('id', '=', $post->id)->first();
        }

        if ($next == null) {
            $next = Post::where('id', '=', $post->id)->first();
        }

        return view('single-blog', [
            'title' => 'News',
            'posts' => Post::latest()->get(),
            'post' => $post,
            'previous' => $previous,
            'next' => $next
        ]);
    }
}
