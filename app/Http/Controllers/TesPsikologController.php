<?php

namespace App\Http\Controllers;

use App\Models\TestAnswer;
use App\Models\TestHistory;
use App\Models\TestQuestion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class TesPsikologController extends Controller
{
    public function __construct() {
        $this->test = TestQuestion::simplePaginate(1);
        $this->scores = 0;
    }

    public function index(){        
        // $test = TestQuestion::paginate(1);
        return view('features.test.TesPsikolog',[
            'test' => $this->test
        ]);
    }

    public function nextPage(){
        return redirect($this->test->nextPageUrl());
    }

    public function store(Request $request){
        $ans_id = $request->ans_id;
        $request->session()->put('points', $request->session()->get('points', 0) + TestAnswer::find($ans_id)->point);
        if ($request->page_id == 10){
            TestHistory::create([
                'user_id' => Auth::user()->id,
                'point' => $request->session()->get('points')
            ]);
            $request->session()->forget('points');    
            return redirect()->route('test')->with('finish_test', true);
        }else {
            return redirect($request->next_url);
        }
    }
}
