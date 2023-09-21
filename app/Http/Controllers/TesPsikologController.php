<?php

namespace App\Http\Controllers;

use App\Models\TesPsikolog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesPsikologController extends Controller
{
    public function index(){
        $tests = TesPsikolog::all();
        return view('TesPsikolog',[
            'tests' => $tests
        ]);
    }
}
