<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('admins.adminLogin');
    }

    public function login()
    {
        
        if ( !auth()->guard('admin')->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([

                'message' => 'Please check your credentials before login in '

            ]);
        }

        return redirect('/admin');

    }

}
