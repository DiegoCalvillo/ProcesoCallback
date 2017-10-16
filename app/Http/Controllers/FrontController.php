<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\asesores as asesores;
use Proceso\supervisores as supervisores;
use Proceso\motivos as motivos;
use Proceso\reportes1 as reportes1;
use Proceso\Http\Requests\reportes1request;
use Carbon\Carbon;
use Auth;
use Redirect;
use Session;

class FrontController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $motivos = motivos::pluck('nombre_motivo', 'id');
    	$supervisores = supervisores::where('estatus_id', '=', 1)->pluck('nombre_supervisor', 'id');
    	return view('inicio', compact('supervisores'))->with('motivos', $motivos);
    }

    public function store(reportes1request $request)
    {
        $reportes1 = new reportes1;
        $date = Carbon::now();
        $reportes1->sare = Auth::User()->sare;
        if($request->asesores != "placeholder" && $request->asesores != 0) //Valida si se ha llenado el select de Asesor
        {
            $reportes1->asesor_encuesta_id = $request->asesores;
        }
        else 
        {
            Session::flash('message-error', 'El campo Asesor es obligatorio');
            return Redirect::to('/inicio');
        }
        $reportes1->fecha_callback = $request->fecha_callback;
        $reportes1->hora_encuesta = date("H:i:s");
        $reportes1->motivo_id = $request->motivos;
        $reportes1->supervisor_id = $request->supervisores;
        $reportes1->score_asesor = $request->score_asesor;
        $reportes1->asesor_id = Auth::User()->id;       
        $reportes1->save();
        return redirect('/encuesta');
    }

    public function getasesores(Request $request, $id)
    {
        if($request->ajax())
        {
            $asesores = asesores::asesores($id);
            return response()->json($asesores);
        }
    }
}
