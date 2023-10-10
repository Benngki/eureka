<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerNewUser(Request $request){
        $validated = $request->validate([
            'UsernameInput'=>'required|max:255',
            'EmailInput'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12',
            'Confirmpassword'=>'required'
        ]);     
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        $request->session()->flash('success','Registration Success Please Login!');

        return redirect(route('login'));

        
    }
   
}