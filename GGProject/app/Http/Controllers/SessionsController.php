<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create()
    {
        return view('signInUp');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function store()
    {
        if ( auth()->attempt(request(['email', 'password'])))
        {
            return redirect('/home');
        }
    }
}
