<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'min:3', 'max:20', 'unique:users'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'alpha_num', 'min:8', 'max:50'],
        ]);

        User::create([
            'username' =>$request->username,
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);

        return redirect('/');
    }
}
