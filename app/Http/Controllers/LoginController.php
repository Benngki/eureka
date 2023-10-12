<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

// class LoginController extends Controller
// {
//     public function LoginUser(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => 'required|email:dns',
//             'password' => 'required'
//         ]);
        
//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
 
//             return redirect()->intended('/dashboard');
//         } 
//         return back()->withErrors([
//             'loginError' => 'The provided credentials do not match our records.',
//         ])->onlyInput('email');

//         // return back()->with('loginError','Login failed!');
//     }
// }
class LoginController extends Controller
{
    public function LoginUser(Request $request)
    {
        $validated =  $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        } 
        return redirect()->back()->with('loginError','Login failed!');

    }
}