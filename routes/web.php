<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas de FrontController
Route::resource('/inicio', 'FrontController');
Route::post('inicio/store', 'FrontController@store');
Route::get('asesores/{id}', 'FrontController@getasesores');

//Rutas de UsuariosController
Route::resource('/usuarios', 'UsuariosController');
Route::post('usuarios/store', 'UsuariosController@store');
Route::post('usuarios/search', ['as' => 'usuarios/search', 'uses' => 'UsuariosController@search']);
Route::get('usuarios/create', 'UsuariosController@create');
Route::get('usuarios/{id}/edit', ['as' => 'usuarios/edit', 'uses' => 'UsuariosController@edit']);
Route::put('usuarios/update', ['as' => 'usuarios/update', 'uses' => 'UsuariosController@update']);

//Rutas de EncuestaController
Route::get('/encuesta', 'EncuestaController@encuesta');
Route::get('/encuesta_ir', 'EncuestaController@IR');
Route::get('/encuesta_nps', 'EncuestaController@NPS');
Route::get('/categorias', 'EncuestaController@categorias');
Route::get('/categorias-nps', 'EncuestaController@categorias_nps'); //Ruta exclusiva para elegir categorias en caso de que se haya llegado al Paso 9
Route::post('encuestas/store', 'EncuestaController@store');
Route::get('/sub_categorias/{id}', 'EncuestaController@getsub_categorias');
Route::get('/comportamiento/{id}', 'EncuestaController@getcomportamiento');

//Rutas de AsesoresController
Route::resource('/asesores', 'AsesoresController');
Route::post('asesores/store', 'AsesoresController@store');
Route::post('asesores/search', ['as' => 'asesores/search', 'uses' => 'AsesoresController@search']);
Route::get('asesores_registro', 'AsesoresController@registro');
Route::get('asesores/{id}/edit', ['as' => 'asesores/edit', 'uses' => 'AsesoresController@edit']);
Route::put('asesores/update', ['as' => 'asesores/update', 'uses' => 'AsesoresController@update']);

//Rutas de SupervisoresController
Route::resource('/supervisores', 'SupervisoresController');
Route::post('supervisores/store', 'SupervisoresController@store');
Route::post('supervisores/search', ['as' => 'supervisores/search', 'uses' => 'SupervisoresController@search']);
Route::get('supervisores/create', 'SupervisoresController@create');
Route::get('supervisores/{id}/edit', ['as' => 'supervisores/edit', 'uses' => 'SupervisoresController@edit']);
Route::put('supervisores/update', ['as' => 'supervisores/update', 'uses' => 'SupervisoresController@update']);

//Rutas de ReporteController
Route::resource('/reportes', 'ReporteController');
Route::post('reportes/search', ['as' => 'reportes/search', 'uses' => 'ReporteController@search']);
Route::get('/reporte1', 'ReporteController@reporte1');
Route::get('/reporte2', 'ReporteController@reporte2');
Route::get('/reporte_general', 'ReporteController@general');

//Rutas de LoginController
Route::resource('/login', 'LoginController');
Route::post('login/store', 'LoginController@store');
Route::get('logout', 'LoginController@logout');

//Rutas de ExcelController
Route::resource('excel', 'ExcelController');

//Verifica que el usuario haya iniciado sesión para poder ingresar a las demas rutas
Auth::routes();