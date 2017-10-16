<?php

namespace Proceso\Http\Controllers;

use Illuminate\Http\Request;

class FinalController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view('final.categorias');
    }
}
