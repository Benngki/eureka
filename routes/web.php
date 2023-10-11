<?php

use App\Livewire\Counter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

// Route::get('/chatbot/{chat}', function (){
//     return 'hello';
// })->name('chat');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

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
    
    
    Route::get('/forgot-password', function () {
        return view('guest/ForgotPassword');
    });
    Route::get('/ResetPassword', function () {
        return view('guest/ChangePassword');
    });
});

Route::middleware(['auth'])->group(function () {
    // chatbot
    Route::get('/chatbot', function () {
        return view('features.chatbot');
    })->name('chatbot');

    Route::get('/chatbot/{chat}', [Controller::class, 'chatbot'])->name('chat');

    Route::get('/test', function () {
        return view('features/test/HomeTest');
    })->name('test');
    
    Route::get('/HasilTest1', function () {
        return view('features/test/HasilTest1');
    });
    
    Route::get('/HasilTest2', function () {
        return view('features/test/HasilTest2');
    });
    
    Route::get('/HasilTest3', function () {
        return view('features/test/HasilTest3');
    });
    
    Route::get('/HasilTest4', function () {
        return view('features/test/HasilTest4');
    });
    
    Route::get('/TesPsikolog', function () {
        return view('features/test/TesPsikolog');
    })->name('soal-test');
});

// Livewire
Route::get('/counter', Counter::class);