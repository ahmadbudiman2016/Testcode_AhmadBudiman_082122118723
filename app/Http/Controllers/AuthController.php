<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view("auth.login");
    }
    public function postLogin(request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect()->intended('/dashboard');
    	}
    	return redirect()->intended('/dashboard');	
    }
     public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
