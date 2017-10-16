<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\supervisores as supervisores;
use Proceso\equipo as equipo;
use Proceso\campana as campana;
use Proceso\estatus as estatus;
use Proceso\Http\Requests\SupervisoresRequest;
use Proceso\Http\Requests\SupervisoresEditarRequest;

class SupervisoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
    	$supervisor = supervisores::paginate(8);
    	return view('supervisores.supervisores')->with('supervisores', $supervisor);
    }

    public function create()
    {
        $equipos = equipo::pluck('nombre_equipo', 'id');
        $campañas = campana::pluck('nombre_campana', 'id');
        return view('supervisores.supervisores_registro')->with('equipo', $equipos)->with('campana', $campañas);
    }

    public function store(SupervisoresRequest $request)
    {
    	$supervisores = new supervisores;
    	$supervisores->sare = $request->sare;
    	$supervisores->nombre_supervisor = $request->nombre_supervisor;
    	$supervisores->equipo_id = $request->equipo;
    	$supervisores->campana_id = $request->campana;
        $supervisores->estatus_id = 1;
    	$supervisores->save();
    	return redirect('/supervisores')->with('message', 'store');
    }

    public function search(Request $request)
    {
        $supervisores = supervisores::where('nombre_supervisor', 'like', '%'.$request-> nombre_supervisor.'%')->paginate(1);
        return \View::make('supervisores.supervisores', compact('supervisores'));
    }

    public function edit($id)
    {
        $supervisores = supervisores::find($id);
        $equipos = equipo::all();
        $campañas = campana::all();
        $estatus = estatus::all();
        return view('supervisores.supervisores_editar', compact('supervisores'))->with('equipo', $equipos)->with('campana', $campañas)->with('estatus', $estatus);
    }

    public function update(SupervisoresEditarRequest $request)
    {
        $supervisores = supervisores::find($request->id);
        $supervisores->sare = $request->sare;
        $supervisores->nombre_supervisor = $request->nombre_supervisor;
        $supervisores->equipo_id = $request->equipo;
        $supervisores->campana_id = $request->campana;
        $supervisores->estatus_id = $request->estatus;
        $supervisores->save();
        return redirect('/supervisores')->with('message', 'edit');
    }
}
