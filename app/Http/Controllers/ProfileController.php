<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function store(User $user, Request $request)
    {        
        // dd($request->all());
        // $user_new= new User();
        // $user_new->image = $request->image;
        // $user_new->firstName= $request->firstName;
        // $user_new->lastName= $request->lastName;
        // $user_new->phoneNumber= $request->phoneNumber;
        // $user_new->tanggal= $request->tanggal;
        // $user_new->bulan= $request->bulan;
        // $user_new->tahun= $request->tahun;
        // $user_new->email= $request->email;
// dd($request->all());
User::create($request->except(["_token"]));
        // User::create([
        //     'image' => $request->image,
        //     'firstName' => $request->firstName,
        //      'user_new' =>$request->lastName,
        //       'user_new' =>$request->phoneNumber,
        //      'user_new' =>$request->tanggal,
        //      'user_new' =>$request->bulan,
        //        'user_new' =>$request->tahun,
        //       'user_new' =>$request->email
        // ]);


        dd($user);


    }
}
