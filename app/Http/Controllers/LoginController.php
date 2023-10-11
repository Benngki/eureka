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
//             'EmailInput' => 'required|email:dns',
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
        $request->validate([
            'EmailInput' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Pemeriksaan apakah email sudah terdaftar
        $user = User::where('EmailInput', $request->EmailInput)->first();

        if (!$user) {
            return back()->withErrors([
                'loginError' => 'The provided email is not registered.',
            ])->withInput();
        }

        $credentials = [
            'EmailInput' => $request->EmailInput,
            'password' => $request->password 
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        } 
        return redirect()->back()->with('loginError','Login failed!');

    }
}