<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    function create()
    {
        return view('auth.login');
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (!$validated) return redirect()->route('login');
        Auth::attempt($validated);

        //     ->with('success', 'User registered successfully!');
        //
    }
}
