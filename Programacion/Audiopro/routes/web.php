<?php
Route::get('EntradaArticulo', function () {
	return view('paginas.EntradaArticulo');
});
Route::get('Audiopro', function () {
	return view('layouts.LogIn');
});

Route::post('Audiopro','login@validar');
Route::get('SalidaArticulo', function () {
	return view('paginas.SalidaArticulo');
});
Route::get('ordenServicio', function () {
	return view('layouts.ordenServicio');
});
//crear roles
Route::get('rol', function () {
	return view('paginas.crearRoles');
});
Route::post('rol','login@regrol');
//consultar estado articulo

Route::get('consultarestado', function () {
	return view('paginas.ConsultarEstadoArticulo');
});
Route::get('consultarestado/{rechazo}','consultaCliente@rechazado');
Route::post('consultarestado','consultaCliente@estado');
//rutas en consultar
Route::get('consultar', 'consultarArticulo@mostrar');
	//detalles;
Route::get('consultar/detalles/{id}/{estado?}','detallesArticulo@index');
	//diagnosticar
Route::get('consultar/diagnosticar/{id}/{estado?}','diagnosticarArticulo@index');
Route::post('consultar/diagnosticar/{id}','diagnosticarArticulo@insert');
	//reparar
Route::get('consultar/reparar/{id}/{estado?}','reparar@index');
Route::post('consultar/reparar/{id}','reparar@insert');

Route::get('layouts/{cc}', 'consultaCliente@consultaCliente');
Route::get('/layouts/orden', 'RegistraEntradaArticulo@insert');
Route::post('layouts', 'RegistraEntradaArticulo@insert'); 