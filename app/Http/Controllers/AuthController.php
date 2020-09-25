<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        // before show login form we can check ip and if it in ban-list,
        // reject connection
        return view('auth.login');
    }
}
