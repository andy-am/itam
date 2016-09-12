<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Image;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('user.login');
    }

    public function doLogin()
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('user/login')
                ->withErrors($validator)
                ->withInput();
        } else {

            $userdata = [
                'email'=> Input::get('email'),
                'password'  => Input::get('password')
            ];

            if (Auth::attempt($userdata)) {
                return Redirect::to('/administration')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                return Redirect::to('user/login')->withErrors([
                    'credentials' => 'These credentials do not match our records.',
                ]);
                //return Redirect::to('user/login');

            }

        }
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('user/login');
    }


}
