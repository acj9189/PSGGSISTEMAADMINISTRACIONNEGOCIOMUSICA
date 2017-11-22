<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\Http\Controllers\Controller;

class consultaCliente extends Controller
{
    public function consultaCliente(Request $request){

    	//$cliente = new cliente;

    	
 
		$cliente = \DB::table('tcliente')->select('nombre_Completo')->where('cedula','=',$request->input('cc'))->get();

		return view('paginas.EntradaArticulo')->with('cliente', $cliente);

	}
}
