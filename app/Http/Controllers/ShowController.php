<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CryptovationX\Knowyc;

class ShowController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('auth.profile')->withProfile(auth()->user()->knowyc);
    }
    public function balance()
    {
        $total = 0;
        foreach (auth()->user()->knowyc->token as $key => $token) {
            $total += $token->total_token;
        }
        return view('auth.balance')->withProfile(auth()->user()->knowyc)->withBalance($total);
    }

    public function signout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('https://cryptovationx.io/');
    }

    public function signout2(Request $request)
    {
        $this->guard()->logout();

        // $request->session()->invalidate();

        return redirect('https://cryptovationx.io/');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
