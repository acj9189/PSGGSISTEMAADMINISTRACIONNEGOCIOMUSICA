<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\articulo;
use Illuminate\Http\Request;




class RegistraEntradaArticulo extends Controller
{


   public function insert(Request $request){

   		$this->validate($request, [
   			'cc' => 'required',
   			'nombres' => 'required',
            'apellidos' => 'required',
   			'telefono' => 'required',
   			'email' => 'required',
   			'reporte' => 'required',
   		]);

 		$articulo = new articulo;

 		$articulo->numero_Serie = $request->input('numero_Serie');
 		$articulo->nombre= $request->input('nombre');
 		$articulo->marca= $request->input('marca');
 		$articulo->modelo = $request->input('modelo');
 		$articulo->estado='Recibido';
 		$articulo->tipoServicio = $request->input('tipoServicio');
 		if($articulo->tipoServicio =='on'){

 			$articulo->tipoServicio = 'garantia';
 		}
 		else{
 			$articulo->tipoServicio = 'reparación';
 		}

 		$articulo->save();

   	return view('paginas.crearCliente');
   }
}
