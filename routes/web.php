<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
