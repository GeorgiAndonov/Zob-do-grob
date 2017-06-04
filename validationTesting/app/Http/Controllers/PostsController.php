<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }
    
     public function create()
    {
        return view('posts.create');
    }

     public function store()
    {
    
    $post = new Post;

    //    $post->title = request('title');

    //    $post->body = request('body');

    //    $post->save();


    $this->validate(request(), [

        'title' => 'required',

        'body' => 'required'

    ]);

    Post::create(request(['title', 'body']));

    return redirect('/'); 

    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}