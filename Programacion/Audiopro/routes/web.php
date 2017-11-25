<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('EntradaArticulo', function () {
    return view('paginas.EntradaArticulo');
});
Route::get('SalidaArticulo', function () {
    return view('paginas.SalidaArticulo');
});
Route::get('ordenServicio', function () {
	return view('layouts.ordenServicio');
});
Route::get('consultar', function () {
	return view('paginas.consultar_articulos');
});
Route::get('consultar/diagnosticar', function () {
	return view('paginas.diagnosticar');
});
Route::get('consultar/detalles', function () {
	return view('paginas.detalles');
});
///rutas para ingresar articulo
Route::get('layouts/{cc}', 'consultaCliente@consultaCliente');
Route::get('/layouts/orden', 'RegistraEntradaArticulo@insert');
Route::post('layouts', 'RegistraEntradaArticulo@insert'); 