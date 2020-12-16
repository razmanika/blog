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

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $post = new Post($request->all());
        $post->save();
        return redirect('posts');
        // return $request->title; #abrunebs dasabmitebul inpodan titles
    }
}
