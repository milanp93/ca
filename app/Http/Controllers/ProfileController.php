<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Auth;
use Redirect;
use App\Http\Requests\ProfileRequest;
use Session;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id;
        $data['user'] = User::find($user_id);

        return view('profile', $data);
    }

    public function edit(ProfileRequest $request)
    {
        $input = $request->all();
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']);
        $user->save();

        Session::flash('info', 'Successful changes saved!');
        return Redirect::to('profile');
    }
}
