<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin');
});

Route::get('/s', function () {
    return view('auth.signup');
});
