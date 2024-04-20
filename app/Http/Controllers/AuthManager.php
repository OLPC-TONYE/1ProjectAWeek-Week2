<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function signup() {
        return view('signup');
    }

    function handle_login_form(Request $request) {
        $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required'
        ]);

        $credentials = ['email'=> $request['login_email'], 'password'=> $request['login_password']];
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with('login_error', 'Failed to Login');
    }

    function handle_signup_form(Request $request) {
        $request->validate([
            'signup_username' => 'required',
            'signup_email' => 'required|email|unique:users,email',
            'signup_password' => 'required|confirmed',
        ]);

        $data['name'] = $request->signup_username;
        $data['email'] = $request->signup_email;
        $data['password'] = Hash::make($request->signup_password);

        $user = User::create($data);

        if(!$user) {
            return redirect(route('signup'))->with('sign_error', 'Failed To Sign You Up, Please Try Again');
        }

        return redirect(route('login'))->with('continue_login', 'Successful Signup. You can now Login');
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
