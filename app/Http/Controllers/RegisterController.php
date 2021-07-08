<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register.register');
    }

    public function create()
    {
        User::create(request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]));

        return redirect()->route('home');
    }
}
