<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('guest/ChangePassword');
    }

    public function update(Request $request){
        $validated = $request->validate([
            "old_password" => ['required', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            "new_password" => ['required', Password::min(8)
                                            ->letters()
                                            ->mixedCase()
                                            ->numbers()
                                            ->symbols()
                                            ->uncompromised()],
            "new_password_conf" => ['required', 'required_with:new_password', 'same:new_password'] ,
        ]);

        Auth::user()->update(['password'=> Hash::make($validated['new_password'])]);
   
        return redirect()->back()->with('success', 'Berhasil ubah password!');
    }

    public function isCurrentPassword($value) {
        if (!Hash::check($value, Auth::user()->password)) {
            dd('The current password is incorrect.');
        }
    }
}
