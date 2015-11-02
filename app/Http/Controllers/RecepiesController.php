<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Recepies;
use App\Http\Requests\RecepiesRequest;
use Auth;
use Redirect;
use Session;


class RecepiesController extends Controller
{
    public function myRecepies()
    {
        $user_id = Auth::user()->id;
        $user_type = Auth::user()->type;
        $data['test'] = "";
        if ($user_type == 0 || $user_type == 1 || $user_type == 2) {
            $data['recepies'] = Recepies::where('users_id', $user_id)->with('user')->get();
        }
        return view('recepies.recepies', $data);
    }

    public function create()
    {
        return view('recepies.create');
    }

    public function store(RecepiesRequest $request)
    {
        return $request->all();
        $input = $zahtev->all();
        if ($input['vrsta'] == 1) {
            $fajl = $zahtev->file('fajl');
            if ($fajl) {
                $destinationPath = 'uploads/fajl';
                $naziv = date('dmhs') . $fajl->getClientOriginalName();
                $naziv = str_replace(' ', '', $naziv);
                $upload = $fajl->move($destinationPath, $naziv);
                if ($upload == "" || $upload == null) {
                    return Redirect::to('prilozi')->withErrors(array('message' => 'Neuspešno dodavanje fajla. Pokušajte ponovo.'));
                }
                $dodajFajl = new FajlAnaliza();
                $dodajFajl->ime_fajla = $upload;
                $dodajFajl->save();
            } else {
                return Redirect::to('prilozi')->withErrors(array('message' => 'Morate dodati fajl.'));

            }
        } else if ($input['vrsta'] == 2) {
            $video = $input['video'];
            if ($video) {
                $dodajVideo = new VideoAnaliza();
                $dodajVideo->ime_videa = $video;
                $dodajVideo->save();
            } else {
                return Redirect::to('prilozi')->withErrors(array('message' => 'Morate uneti link.'));
            }
        } else {
            return Redirect::to('prilozi')->withErrors(array('message' => 'Niste izabrali vrstu dodavanja - video ili fajl.'));
        }
        Session::flash('info', 'Uspešno ste izvršili dodavanje.');
        return Redirect::to('prilozi');


    }

    public function edit($id)
    {
        $data['recepie'] = Recepies::find($id)->first();
        return view('recepies.edit', $data);
    }

    public function update($id)
    {
        $user_id = Auth::user()->id;
        $user_type = Auth::user()->type;
        if ($user_type != 3) {
            $recepie = Recepies::find($id)->first();
            if ($recepie->users_id == $user_id) {

                $recepie->name;

                Session::flash('info', 'Successful edited recepie!');
                return Redirect::to('my-recepies');
            } else {
                Session::flash('info', 'No access to remove recepie!');
                return Redirect::to('my-recepies');
            }
        } else {
            $recepie = Recepies::find($id);



            Session::flash('info', 'Successful edited recepie!');
            return Redirect::to('my-recepies');
        }
    }

    public function delete($id)
    {
        $user_id = Auth::user()->id;
        $user_type = Auth::user()->type;
        if ($user_type != 3) {
            $recepie = Recepies::find($id)->first();
            if ($recepie->users_id == $user_id) {
                $recepie->delete();
                Session::flash('info', 'Successful removed recepie!');
                return Redirect::to('my-recepies');
            } else {
                Session::flash('info', 'No access to remove recepie!');
                return Redirect::to('my-recepies');
            }
        } else {
            $recepie = Recepies::find($id);
            $recepie->delete();
            Session::flash('info', 'Successful removed recepie!');
            return Redirect::to('my-recepies');
        }


    }
}
