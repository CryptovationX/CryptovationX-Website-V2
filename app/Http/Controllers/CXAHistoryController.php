<?php

namespace CryptovationX\Http\Controllers;

use CryptovationX\CXAHistory;
use Illuminate\Http\Request;

class CXAHistoryController extends Controller
{
    public function addToken()
    {
        // for ($id=165; $id < 7416; $id++) {
        $knowyc_id = 81;
        $type = "Airdrop";
        $amount_usd = 0;
        $token = 410;
        $total_token = 410;
        $bonus = 0;
        $data = compact('knowyc_id', 'type', 'amount_usd', 'token', 'total_token', 'bonus');
        CXAHistory::create(compact('knowyc_id', 'type', 'amount_usd', 'token', 'total_token', 'bonus'));
        // }
    }

    public function addTokens()
    {
        for ($id=165; $id <7416 ; $id++) {
            $data = CXAHistory::find($id);
            $data->created_at = date('Y-m-d H:i:s', '1531353600');
            $data->updated_at = date('Y-m-d H:i:s', '1531353600');
            $data->save();
        }
    }
}
