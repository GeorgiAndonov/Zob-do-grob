<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.registration');
    }
    
    public function store()
    {
        //Validate the information
        $this->validate(request(), [
            
            'name'=> 'required',

            'email' => 'required|unique:users|email',

            'password' => 'required|confirmed|min:4'
        ]);

        //Create and save the user.
       $user = User::create([ 

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

            ]);

        //Sign them in.

        auth()->login($user);

        //Redirect to home page.

        return redirect('/');
    }
}

