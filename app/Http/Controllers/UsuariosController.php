<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\User as User;
use Proceso\puesto as puesto;
use Proceso\estatus as estatus;
use Session;
use Redirect;
use Proceso\Http\Requests\UsuariosRequest;
use Proceso\Http\Requests\UsuariosEditarRequest;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
    	$user = User::paginate(8);
    	return view('usuarios.usuarios')->with('users', $user);
    }

    public function create()
    {
        //$puesto = puesto::all();
        $puesto = puesto::pluck('puesto', 'id');
    	return view('usuarios.usuarios_registro')->with('puesto', $puesto);
    }

    public function store(UsuariosRequest $request)
    {
    	$users = new User;
    	$users->name = $request->name;
    	$users->sare = $request->sare;
    	$users->email = $request->email;
    	$users->puesto_id = $request->puesto;
    	$users->username = $request->username;
        $users->estatus_id = 1;
    	$users->password = bcrypt($request->password);
    	$users->save();
    	return redirect('/usuarios')->with('message', 'store');
    }

    public function edit($id)
    {
        $users = User::find($id);
        $estatus = estatus::all();
        $puestos = puesto::all();
        return view('usuarios.usuarios_editar', compact('users'))->with('estatus', $estatus)->with('puesto', $puestos);
    }

    public function update(UsuariosEditarRequest $request)
    {
        $users = User::find($request->id);
        $users->name = $request->name;
        $users->sare = $request->sare;
        $users->email = $request->email;
        $users->puesto_id = $request->puesto;
        $users->username = $request->username;
        $users->estatus_id = $request->estatus;
        if($request->password1 != "") //Verifica si se cambió la contraseña, en dado caso la cambia
        {
           $users->password = $request->password1;
        }
        $users->save();
        return redirect('/usuarios')->with('message', 'edit');
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', '%'.$request-> name.'%')->paginate(1);
        return \View::make('usuarios.usuarios', compact('users'));
    }
}
