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
            'username' => 'required|min:3|max:255',
            'email' => 'required|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/|min:3|max:255',
            'password' => 'required|min:7|max:255'
        ]));

        return redirect()->route('home');
    }
}
