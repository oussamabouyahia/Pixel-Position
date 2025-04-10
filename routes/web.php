<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::get("/create",[RegistredUserController::class,'create'])->name('createUser');
Route::post("/create",[RegistredUserController::class,'store'])->name('storeUser');

Route::get("/login",[SessionController::class,'create'])->name('login');
Route::post("/login",[SessionController::class,'store'])->name('loginStore');
