<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\asesores as asesores;
use Proceso\equipo as equipo;
use Proceso\supervisores as supervisores;
use Proceso\campana as campana;
use Proceso\estatus as estatus;
use Proceso\Http\Requests\AsesoresRequest;
use Proceso\Http\Requests\AsesoresEditarRequest;

class AsesoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
    	$asesor = asesores::paginate(8);
        return view('asesores.asesores')->with('asesores', $asesor);
    }

    public function store(AsesoresRequest $request)
    {
    	$asesores = new asesores;
    	$asesores->sare = $request->sare;
    	$asesores->nombre_asesor = $request->nombre_asesor;
    	$asesores->equipo_id = $request->equipo;
    	$asesores->campana_id = $request->campana;
    	$asesores->supervisor_id = $request->supervisores;
        $asesores->estatus_id = 1;
    	$asesores->save();
    	return redirect('/asesores')->with('message', 'store');
    }

    public function registro()
    {
        $equipos = equipo::pluck('nombre_equipo', 'id');
        $campañas = campana::pluck('nombre_campana', 'id');
        $supervisores = supervisores::where('estatus_id', '=', 1)->pluck('nombre_supervisor', 'id');
        return view('asesores.asesores_registro')->with('equipo', $equipos)->with('campana', $campañas)->with('supervisores', $supervisores);
    }

    public function search(Request $request)
    {
        $asesores = asesores::where('nombre_asesor', 'like', '%'.$request-> nombre_asesor.'%')->paginate(1);
        return \View::make('asesores.asesores', compact('asesores'));
    }

    public function edit($id)
    {   
        $asesores = asesores::find($id);
        $equipos = equipo::all();
        $campañas = campana::all();
        $supervisores = supervisores::where('estatus_id', '=', 1)->get();
        $estatus = estatus::all();
        return view('asesores.asesores_editar', compact('asesores'))->with('equipo', $equipos)->with('campana', $campañas)->with('supervisores', $supervisores)->with('estatus', $estatus);
    }

    public function update(AsesoresEditarRequest $request)
    {
        $asesores = asesores::find($request->id);
        $asesores->sare = $request->sare;
        $asesores->nombre_asesor = $request->nombre_asesor;
        $asesores->equipo_id = $request->equipo;
        $asesores->campana_id = $request->campana;
        $asesores->supervisor_id = $request->supervisor;
        $asesores->estatus_id = $request->estatus;
        $asesores->save();
        return redirect('/asesores')->with('message', 'edit');
    }
}
