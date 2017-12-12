<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\cliente;
use Illuminate\Http\Request;
use \View as View;

class crearCliente extends Controller
{
     public function insertar(Request $request){


     	$cc = $request-> input('cc');
     	$names = $request-> input('names');
     	$lastnames = $request-> input('lastnames');
     	$phone = $request-> input('phonenumber');
     	$email = $request-> input('email');

 		$cliente = new cliente;

 		if($cc == ''){
 			$cc = 'null';
 		}
   	    //return view('layouts.ordenServicio');*/
 		//dd($names, $cc);
 		//return view('paginas.crearCliente' ,['names' => $names]);
 		$cliente->cedula = $cc;
 		$cliente->nombre_Completo = $names . ' ' . $lastnames;
 		$cliente->telefono_Contacto =$phone;
 		$cliente->email = $email;

 		$cliente->save();
 		return view('layouts.ordenServicio');

   }

   public function create(){

   		//dd('14');


   	return view('paginas.crearCliente');
   }


}
