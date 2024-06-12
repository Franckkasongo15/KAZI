<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

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

Route::resource('cv', CvController::class)->names([
    'index' => 'cv.index',
    'create' => 'cv.create',
    'edit' => 'cv.edit',
    'update' => 'cv.update'
]);