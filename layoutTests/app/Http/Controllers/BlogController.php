<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('Blog.indexBlog');
    }
    
     public function create()
    {
        return view('Blog.create');
    }

    public function store()
    {
       $post = new \App\Post;

       $post->title = request('title');

       $post->body = request('body');

       $post->save();

    return redirect('/blog');

    }
}
