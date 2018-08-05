<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        $total = 0;
        foreach (auth()->user()->knowyc->token as $key => $token) {
            $total += $token->total_token;
        }
        return view('auth.balance')->withProfile(auth()->user()->knowyc)->withBalance($total);
    }

    public function getTermsandconditions()
    {
        return view('termsandconditions.termsandconditions');
    }
}
