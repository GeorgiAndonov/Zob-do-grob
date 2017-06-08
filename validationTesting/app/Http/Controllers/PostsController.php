<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest();

        if($month = request('month'))
        {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year'))
        {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

        //Use query scope next time

        return view('posts.index', compact('posts', 'archives'));
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

    auth()->user()->publish(

        new Post(request(['title', 'body']))

    );

    return redirect('/'); 

    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
