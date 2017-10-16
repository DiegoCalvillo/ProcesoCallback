<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Proceso\Http\Requests;
use Proceso\Http\Requests\LoginRequest;
use Proceso\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
    	if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']])){
            if(Auth::user()->estatus_id == 0)
            {
                Session::flash('message-error', 'Cuenta de Usuario Bloqueada');
                return Redirect::to('/login'); 
            }
            return Redirect::to('/inicio');
    	}
    	Session::flash('message-error', 'Acceso denegado');
    	return Redirect::to('/login');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');
    }
}
