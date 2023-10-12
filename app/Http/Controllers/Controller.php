<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function chatbot($chat){
        $url = sprintf("https://benngki.pythonanywhere.com/%s",$chat);
        $response = Http::get($url);
        return $response['response'];
    }

    public function ForgotPasswordUser(Request $request){
        $user = User::where('EmailInput', $request->EmailInput)->first();
    }
}
