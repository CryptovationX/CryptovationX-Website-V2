<?php

namespace CryptovationX\Http\Controllers;

use Illuminate\Http\Request;
use CryptovationX\Knowyc;

class KnowycController extends Controller
{
    public function eth($address, $profile)
    {
        $id = substr($profile, 36, 10);
        $knowyc = Knowyc::find($id);
        $knowyc->address = $address;
        $knowyc->save();
        $controller = new ShowController;
        return $controller->balance();
    }
}
