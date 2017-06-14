<?php

namespace App\Http\Controllers;

use App\User;
// use App\Mail\WelcomeNew;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signInUp');
    }
    
    public function store(RegistrationForm $register)
    {

        //Create and save the user.
       $user = User::create([ 

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

            ]);

        //Sign them in.

        auth()->login($user);

        // \Mail::to($user)->send( new WelcomeNew($user) );

        //Redirect to home page.

        // session()->flash('message', 'Thanks for registering!');

        return redirect('/home');
    }
}

