<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/home', function () {
    return view('pages/home-connected');
});

Route::get('/message', function () {
    return view('pages/message');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});
