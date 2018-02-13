<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\Http\Controllers\Controller;

class consultaCliente extends Controller
{
    public function consultaCliente(Request $request){
 
		$cliente = \DB::table('tcliente')->select('nombre_Completo')->where('cedula','=',$request->input('cc'))->get();

		return view('paginas.EntradaArticulo')->with('cliente', $cliente);

	}

	public function estado(Request $request){

		$orden =\DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
		join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('numero_orden','=',$request->input('Norden'))->get();

		return view ('paginas.ConsultaCliente')->with('orden', $orden);
	}

	public function rechazado (Request $request, $rechazo){

		\DB::table('tarticulo')->where('ida','=',$rechazo)->update(['estado' => 6]);

		$orden =\DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
		join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('ida','=',$rechazo)->get();
	
	
		return view ('paginas.ConsultaCliente')->with('orden', $orden);
	}
}
?>