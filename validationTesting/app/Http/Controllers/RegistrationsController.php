<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view('session.create');
    }
    
    public function store()
    {
        //Validate the information
        $this->validate(request(), [
            
            'name'=> 'required',

            'email' => 'required|email',

            'password' => 'required'
        ]);

        //Create and save the user.
        $user = User::create(request(['name', 'email', 'password']));

        //Sign them in.

        auth()->login($user);

        //Redirect to home page.

        return redirect('/');
    }
}
