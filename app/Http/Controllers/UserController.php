<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'birth_date' => 'required|date',
            'email' => 'required|email|unique:users',
        ]);
    
        // Simpan data ke dalam database
        User::create($data);
    
        return redirect()->route('user.index')->with('success', 'Data berhasil disimpan.');
    }
}
