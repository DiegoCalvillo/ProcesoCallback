<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;
use Proceso\Http\Requests;
use Proceso\encuesta as Encuesta;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
    	Excel::create('Reporte de encuestas', function($excel){
    		$excel->sheet('Encuestas', function($sheet){
    			$reporte = DB::select('call sp_reportes1("2017-08-01")');
    			$sheet->fromArray($reporte);
    		});
    	})->export('xls');
    }
}
