<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\cliente;
use Illuminate\Http\Request;

class crearCliente extends Controller
{
     public function insertar(Request $request){

     	if($request->isMethod("post") && $request->has("names")){

     		$names = $request-> input("names");

     	}
     	else{

     		$names = '';
     	}



   		/*$this->validate($request, [
   			'cc' => 'norequired',
   			'numero_Serie' => 'required',
   			'nombre' => 'required',
   			'marca' => 'required',
   			'modelo' => 'required',
   			'reporte' => 'required',
   		]);

 		$cliente = new cliente;


   	//return view('layouts.ordenServicio');*/
 		//dd('14');
 		return view('paginas.crearCliente' ,['names' => $names]);
   }

   public function create(){

   		//dd('14');


   	return view('paginas.crearCliente');
   }


}
