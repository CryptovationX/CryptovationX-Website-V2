<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use CryptovationX\Knowyc;

class TestController extends Controller
{
    public function tests()
    {
        $data = Knowyc::find(84);
        dd($data);
    }

    public function test()
    {
        // \Iseed::generateSeed('c_x_a_histories');
        return view('auth.ais_register');
        // return view('emails.activate');
    }
}
