<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use CryptovationX\Knowyc;

class SignupController extends Controller
{
    public function signup($token)
    {
        $info = Knowyc::where('pic_passport', $token)->first();
        return view('auth.register')->withInfo($info);
    }
}
