<?php

use App\Livewire\Chatbot;
use App\Livewire\Counter;
use App\Livewire\Profile;
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
});

Route::get('/profile', function () {
    return view('profile');
});

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

Route::get('/HasilTest1', function () {
    return view('HasilTest1');
});

Route::get('/HasilTest2', function () {
    return view('HasilTest2');
});

Route::get('/HasilTest3', function () {
    return view('HasilTest3');
});

Route::get('/HasilTest4', function () {
    return view('HasilTest4');
});

Route::get('/TesPsikolog', function () {
    return view('TesPsikolog');
});


// Livewire
Route::get('/counter', Counter::class);