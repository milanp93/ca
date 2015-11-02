<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Laravel\Socialite\Facades\Socialite;
use Redirect;
use Request;
use Session;
use Validator;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function login()
    {
        $data['page_description'] = "description";
        $data['page_title'] = "Food &amp; Recipes Web Template - Home";
        return view('login', $data);
    }

    public function facebook()
    {
        $user = Socialite::with('facebook')->redirect();
        return $user;
    }

    public function twitter()
    {
        $user = Socialite::with('twitter')->redirect();

        return $user;
    }

    public function google()
    {
        $user = Socialite::with('google')->redirect();
        return $user;
    }

    public function register()
    {
        $data['page_description'] = "description";
        $data['page_title'] = "Food &amp; Recipes Web Template - Home";
        return view('register', $data);
    }

    protected function access(LoginRequest $request)
    {
        $input = $request->all();
        $user = array(
            'email' => $input['email'],
            'password' => $input['password'],
            'banned' => 0
        );

        if (Auth::attempt($user)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('login')->withErrors(array('message' => 'Not found user with submited data.'));
        }
    }


    protected function create(RegisterRequest $request)
    {
        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => $data['_token']
        ]);
        Session::flash('info', 'Successful registered! Please login.');
        return Redirect::to('login');

    }
}
