<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
        // For now, just redirect to homepage (since DB may not be running)
        return redirect()->route('welcome')->with('status', 'Welcome back!');
    }

    public function showSignupForm() {
        return view('signup');
    }

    public function signup(Request $request) {
        // Just redirect for screenshot purposes
        return redirect()->route('welcome')->with('status', 'Account created!');
    }

    public function logout(Request $request) {
        return redirect()->route('login');
    }
}