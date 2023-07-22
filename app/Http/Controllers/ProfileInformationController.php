<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $username) {
        return view('profile', [
            'username' => $username,
            'post' => $request->get('post')
        ]);  
    }
}
