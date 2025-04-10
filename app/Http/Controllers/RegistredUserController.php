<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistredUserController extends Controller
{
    //
    function create(){
        return view('auth.register');
    }
    function store(Request $request){
       $validated= $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
      if(!$validated)  return redirect()->route('create');
      $user= User::create($validated);
      Auth::login($user);
    //     ->with('success', 'User registered successfully!');

    }
    function index(){
        return view('index');
    }
}
