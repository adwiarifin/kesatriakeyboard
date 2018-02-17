<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    
    public function getLogin()
    {
    	if (Auth::check()) {
	        return redirect('/admin/dashboard');
	    }
	    return view('auth.login');
    }

    public function getLogout()
    {
    	Auth::logout();
        return redirect('/auth/login');
    }

    public function postLogin(Request $request)
    {
    	$email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/admin/dashboard');
        }
        
        return "Login Error";
    }
}
