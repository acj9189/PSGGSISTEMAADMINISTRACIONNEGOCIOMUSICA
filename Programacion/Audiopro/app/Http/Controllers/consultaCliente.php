<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\Http\Controllers\Controller;
use laracasts\flash\flash;

class consultaCliente extends Controller
{
    public function consultaCliente(Request $request){

    	//$cliente = new cliente;
 	
      $this->validate($request, [
   		'cc' => 'required',

   	 ]);

		$cliente = \DB::table('tcliente')->select('cedula','nombre_Completo')->where('cedula','=',$request->input('cc'))->get();

		if (count($cliente)>0){
			//flash('Cliente encontrado');
			return view('paginas.EntradaArticulo')->with('cliente',$cliente);
		}
		
		else {
			flash('Cliente no encontrado ó Cédula erronea');
			return view('paginas.consultaClienteEntrada');
		}


	}
}

?>
