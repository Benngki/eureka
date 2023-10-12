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
        request()->session()->forget('points');    
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
            $total_point = $request->session()->get('points', 0);
            TestHistory::create([
                'user_id' => Auth::user()->id,
                'point' => $request->session()->get('points')
            ]);

            // Poin 10-16 (bebas gangguan)
            // Poin 17-24 (gelisah atau cemas)
            // Poin 25-32 (antisosial) hasilTest4
            // Poin 33-40 (depresi) 

            if ($total_point <= 16) {
                return view('features.test.hasilTest.bebasGangguan');
            } else if ($total_point >= 17 && $total_point <= 24) {
                return view('features.test.hasilTest.gelisah');
            }else if ($total_point >= 25 && $total_point <= 32) {
                return view('features.test.hasilTest.antisosial');
            }else if ($total_point >= 33) {
                return view('features.test.hasilTest.depresi');
            }

            $request->session()->forget('points');    
        }else {
            return redirect($request->next_url);
        }

    }
}
