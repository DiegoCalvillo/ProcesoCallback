<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\encuesta as Encuesta;
use Proceso\reportes2s as reportes2s;
use Proceso\categorias as Categorias;
use Proceso\sub_categorias as sub_categorias;
use Proceso\comportamiento as comportamiento;
use Proceso\score as score;
use Proceso\Http\Requests\reportes2request;
use Carbon\Carbon;
use DB;
use Auth;
use Redirect;
use Session;

class EncuestaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function encuesta()
    {
        Session::flash('message', 'La encuesta ha iniciado. Revisa las notas de la cuenta de Usuario');
    	return view('apertura.uno2')->with('message');
    }

    public function IR()
    {
        Session::flash('message','La pregunta de IR se debe realizar al finalizar de proporcionar la solución al incoveniente del usuario o resuelto todas las dudas sobre los productos y servicios');   
        return view('apertura.dos')->with('message');
    }

    public function NPS()
    {
        Session::flash('messge', 'La pregunta de NPS se debe realizar después de que el cliente haya confirmado que el motivo de insatisfacción haya quedado resuelto');
        return view('apertura.tres')->with('message');
    }

    public function categorias_nps() //En caso de que se llegue a la encuesta NPS se abrirá esta ventana especial de categorías
    {
        $categorias = categorias::pluck('nombre_categoria', 'id');
        //$sub_categorias = sub_categorias::all();
        return view('final.categorias_nps', compact('categorias'));
    }

    public function categorias() //Categorias, sin que haya llegado al paso de NPS
    {
        $categorias = categorias::pluck('nombre_categoria', 'id');
        return view('final.categorias', compact('categorias'));
    }

    public function store(reportes2request $request)
    {
    	$date = Carbon::now(); //Carbon es una clase con la cual se definen las hora y las fechas
    	$reportes2s = new reportes2s;
    	$reportes2s->categoria_id = $request->categorias;
        if($request->sub_categorias != "placeholder") //Valida si el select Subcategorias se ha llenado
        {
            $reportes2s->sub_categoria_id = $request->sub_categorias;
        }
        else
        {
            Session::flash('message-error', 'El Campo Subcategorias es obligatorio');
            return Redirect::to('/categorias');
        }
        if($request->comportamiento != "placeholder") //Valida si el select Comportamiento se ha llenado
        {
            $reportes2s->comportamiento_id = $request->comportamiento;
        }
        else
        {
            Session::flash('message-error', 'El Campo Comportamiento es obligatorio');
            return Redirect::to('/categorias');
        }
        $reportes2s->fecha_encuesta = $date;
        $reportes2s->incoveniente = $request->incoveniente;
    	$reportes2s->save();
        return redirect('/inicio')->with('message', 'store');
    }

    public function getsub_categorias(Request $request, $id)
    {
        if($request->ajax())
        {
            $sub_categorias = sub_categorias::sub_categorias($id);
            return response()->json($sub_categorias); 
        }
    }

    public function getcomportamiento(Request $request, $id)
    {
        if($request->ajax())
        {
            $comportamiento = comportamiento::comportamiento($id);
            return response()->json($comportamiento);
        }
    }

}
