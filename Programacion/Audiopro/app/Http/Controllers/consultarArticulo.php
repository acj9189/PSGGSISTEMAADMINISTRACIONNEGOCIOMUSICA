<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class consultarArticulo extends Controller
{
public function mostrar (Request $request){
	/*para los estados:
    0 ->pendiente
    1 ->en revision
    2 ->por autorizar
    3 ->por reparar 
    4 ->en reparacion
    5 ->reparado*/
		
		$articulo = \DB::table('tarticulo')->get();
		return view('paginas.consultar_articulos')->with('articulos', $articulo);
	
}}
?>