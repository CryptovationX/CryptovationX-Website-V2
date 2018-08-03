<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use CryptovationX\Mail\Round1;
use CryptovationX\Knowyc;

class MailController extends Controller
{
    public function test()
    {
        // return view('emails.airdrop2');
        while ($info = Knowyc::where('status', 'unconfirmed')->first()) {
            Mail::to($info->email)->send(new Round1($info));
            // $info = Knowyc::where('status', 'unconfirmed')->first();
            $info->status = 'mailed';
            $info->save();
        }
    }
}
