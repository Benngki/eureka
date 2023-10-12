<?php

namespace App\Http\Controllers;

use App\Models\TestHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $last_test = TestHistory::all()->last();
        $img_status = '';

        if ($last_test) {
            if ($last_test->point <= 16) {
                $img_status = 'img/status_test/baik.png';
            } else if ($last_test->point >= 17 && $last_test->point <= 24) {
                $img_status = 'img/status_test/cemas.png';
            }else if ($last_test->point >= 25 && $last_test->point <= 32) {
                $img_status = 'img/status_test/antisosial.png';
            }else if ($last_test->point >= 33) {
                $img_status = 'img/status_test/depresi.png';
            }      
        }

        return view('profile', [
            'img_status' => $img_status,
            'user' => Auth::user()
        ]);
    }
}
