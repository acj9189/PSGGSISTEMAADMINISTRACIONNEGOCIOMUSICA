<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\articulo;
use App\cliente;
use App\ordenServicio;
use Illuminate\Http\Request;

use Carbon\Carbon;

class RegistraSalidaArticulo extends Controller
{
    public function ConsultaCliente(Request $request){
    	
    	$this->validate($request, [
   		'ac' => 'required',

   	  ]);
    	//return view('paginas.ArticulosReparados');
    	// $clienteid = \DB::table('tcliente')->select('idC')->where('cedula','=',$request->input('cc'))->get();

    	// $datos = \DB::select('select art.tarticulo.tipoServicio, art.tarticulo.descripcion, art.tarticulo.marca, art.tarticulo.modelo from art.tarticulo join ord.torden on art.tarticulo.idA = ord.torden.idArticulo and $clienteid=ord.torden.idCliente and art.tarticulo.estado = Reparado ' );

    	// return $datos;
    }
}
?>