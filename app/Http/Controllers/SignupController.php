<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use CryptovationX\Knowyc;
use Mail;
use CryptovationX\Mail\Ais;
use CryptovationX\CXAHistory;

class SignupController extends Controller
{
    public function getIndex()
    {
        return view('auth.ais_register');
    }

    public function signup($token)
    {
        $info = Knowyc::where('pic_passport', $token)->first();

        if (is_null($info)) {
            $info = Knowyc::where('users', $token)->first();
        }

        if (is_null($info)) {
            $info = Knowyc::where('address', $token)->first();
        }
        return view('auth.register')->withInfo($info);
    }

    public function ais(Request $request)
    {
        $randomint = rand(10000, 99999);
        $random = 'CXA'.$randomint;
        
        while (!is_null(Knowyc::where('account_id', $random)->first())) {
            $randomint = rand(10000, 99999);
            $random = 'CXA'.$randomint;
        }
        $users = $this->v4();
        $para = array_merge($request->all(), ['account_id' => $random, 'users' => $users]);

        $account = Knowyc::create($para);

        $knowyc_id = $account->id;
        $type = "Airdrop";
        $amount_usd = 0;
        $token = 1000;
        $total_token = 1000;
        $bonus = 0;
        $data = compact('knowyc_id', 'type', 'amount_usd', 'token', 'total_token', 'bonus');
        CXAHistory::create(compact('knowyc_id', 'type', 'amount_usd', 'token', 'total_token', 'bonus'));

        Mail::to($request->email)->send(new Ais($users));

        return view('auth.confirm')->withEmail($request->email)->withId($knowyc_id);
    }

    public function resendmail($id)
    {
        $users = Knowyc::find($id);
        Mail::to($users->email)->send(new Ais($users->users));

        return view('auth.confirm')->withEmail($users->email)->withId($id);
    }

    public static function v4()
    {
        return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

    // 32 bits for "time_low"
    mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),

    // 16 bits for "time_mid"
    mt_rand(0, 0xffff),
    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand(0, 0x0fff) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand(0, 0x3fff) | 0x8000,

    // 48 bits for "node"
    mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
    }
}
