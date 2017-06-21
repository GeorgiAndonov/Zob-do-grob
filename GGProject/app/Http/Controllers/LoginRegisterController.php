<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create()
    {
        return view('signInUp');
    }
}
