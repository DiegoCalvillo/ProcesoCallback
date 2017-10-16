<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\reportes1 as reportes1;
use Proceso\reportes2s as reportes2s;
use DB;
use Auth;

class ReporteController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
        $this->middleware('admin');
	}

    public function index()
    {
        $reportes = DB::select('call sp_reportes()'); //Manda llamar al Procedimiento almacenado que junta las dos tablas a traves de un Inner Join
        return view('reportes.reporte')->with('reportes', $reportes);
    }

    public function search(Request $request) //Recibe el parámetro de la fecha
    {
        $reportes2 = DB::select('call sp_reportes1("'.$request-> fecha_callback.'")');
        return view('reportes.reporte_general_2')->with('reportes2', $reportes2);
    }

    public function reporte1()
    {
        $reportes1 = reportes1::all();
        return view('reportes.reporte1')->with('reportes1', $reportes1);
    }

    public function reporte2()
    {
        $reportes2s = reportes2s::all();
        return view('reportes.reporte2')->with('reportes2s', $reportes2s);
    }

   /* public function porfecha()
    {
        $fecha = "2017-08-01";
        $reportes2 = DB::select('call sp_reportes1("'.$fecha.'")');
        return view('reportes.reporte_general_2')->with('reportes2', $reportes2);
    }*/

    public function general()
    {
        $reportes = DB::select('call sp_reportes()');
        return view('reportes.reporte_general')->with('reportes', $reportes);
    }
}
