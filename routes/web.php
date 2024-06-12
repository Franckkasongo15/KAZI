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

Route::get('/profile', function () {
    return view('pages/profile');
});

Route::get('/add-job', function () {
    return view('pages/add-job');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});
