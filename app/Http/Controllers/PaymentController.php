<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Payments;
use App\User;
use Auth;

class PaymentController extends Controller
{

    public function upgrade()
    {
        $user_id = Auth::user()->id;
        $data['exist'] = Payments::where('users_id', $user_id);
        $data['type'] = User::where('id', $user_id);
        return view('upgrade', $data);
    }

}
