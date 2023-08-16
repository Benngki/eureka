<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/chatbot', function () {
    return view('chatbot');

Route::get('/', function () {
    return view('HomeTest');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('Register');
});

Route::get('/forgot-password', function () {
    return view('ForgotPassword');
});

Route::get('/profile', function () {
    return view('profile');
});