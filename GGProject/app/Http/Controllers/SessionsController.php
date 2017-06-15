<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function store()
    {
        if ( !auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([

                'message' => 'Please check your credentials before login in '

            ]);
        }

        return redirect('/home');
    }
}
