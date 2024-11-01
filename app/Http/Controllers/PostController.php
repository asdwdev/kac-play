<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.posts', [
            'posts' => Post::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post.post', [
            'post' => $post
        ]);
    }
}
