<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $posts = new Post();
        
        return view('posts')->with('posts', $posts->getPost());
    }

    public function showPost(Post $post)
    {
        return view('show')->with('post', $post);
    }
}
