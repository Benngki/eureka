<?php

use App\Models\User;
use App\Livewire\Counter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TesPsikologController;
use App\Http\Controllers\ChangePasswordController;

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

Route::middleware(['guest'])->group(function () {
    //Login
    Route::get('/login', function () {
        return view('guest/Login');
    })->name('login');
    Route::post('/login', [LoginController::class, 'LoginUser'])->name('LoginUser');
    
    // Register
    Route::get('/register', function () {
        return view('guest/Register');
    });
    
    Route::post('/register', [RegisterController::class, 'registerNewUser'])->name('registerNewUser');
    
    
});

Route::middleware(['auth'])->group(function () {
    // change-password
    Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('auth.change-password.index');
    Route::post('/change-password', [ChangePasswordController::class, 'update'])->name('auth.change-password.update');

    // log out
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');    
    
    // profile 
    Route::post('/profile', [UserController::class,'update'])->name('profile.update');
    Route::post('/profile/update-avatar', [UserController::class,'updateImage'])->name('profile.update.avatar');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    // chatbot
    Route::get('/chatbot', function () {
        return view('features.chatbot');
    })->name('chatbot');
    Route::get('/chatbot/{chat}', [Controller::class, 'chatbot'])->name('chat');
    
    // test psikologi
    Route::get('/test', [HomeTestController::class, 'index'])->name('test');    
    Route::get('/TesPsikolog', [TesPsikologController::class, 'index'])->name('soal-test');
    Route::post('/TesPsikolog', [TesPsikologController::class, 'store']);
});

// Livewire
Route::get('/counter', Counter::class);
