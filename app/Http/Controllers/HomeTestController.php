<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTestController extends Controller
{
    public function index(){
        request()->session()->forget('points');    
        return view('features/test/HomeTest');
    }
}
