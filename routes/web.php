<?php

use App\Livewire\Counter;
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

Route::get('/', function (){
    return view('Home');
})->name('home');


Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');    

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('guest/Login');
    })->name('login');
    
    Route::get('/register', function () {
        return view('guest/Register');
    });
    
    Route::get('/forgot-password', function () {
        return view('guest/ForgotPassword');
    });
    Route::get('/ResetPassword', function () {
        return view('guest/ChangePassword');
    });
    
});

Route::get('/test', function () {
    return view('HomeTest');
})->name('test');

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