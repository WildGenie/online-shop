<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function create()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect()->route('home')->with('success', 'You have successfully logged');
        }

        return back()->withErrors([
            'email' => 'Email is incorrect',
            'password' => 'Password is incorrect'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home')->with('success', 'You have successfully logged out');
    }
}
