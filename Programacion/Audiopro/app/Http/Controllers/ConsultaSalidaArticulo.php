<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\articulo;
use App\cliente;
use App\ordenServicio;
use Illuminate\Http\Request;

use Carbon\Carbon;

class ConsultaSalidaArticulo extends Controller
{
    public function ConsultaCliente(Request $request){
    	
    	$this->validate($request, [
   		'ac' => 'required',

   	  ]);

    	$cliente = \DB::table('tcliente')->select('cedula','nombre_Completo')->where('cedula','=',$request->input('ac'))->get();

    	$articulo = \DB::table('tarticulo')->join('torden', 'tarticulo.idA','=','torden.idArticulo')->join('tcliente','torden.idCliente','=','tcliente.idC')->where('tcliente.cedula','=',$request->input('ac'))->select('tarticulo.tipoServicio','tarticulo.descripcion','tarticulo.marca','tarticulo.modelo')->get();

		if (count($cliente)>0){
			
			return view('paginas.ArticulosReparados')->with('cliente',$cliente)->with('articulo',$articulo);
		}
		
		else {
			flash('Cliente no encontrado ó Cédula erronea');
			return view('paginas.SalidaArticulo');
		}
    	
    	// $clienteid = \DB::table('tcliente')->select('idC')->where('cedula','=',$request->input('cc'))->get();

    	// $datos = \DB::select('select art.tarticulo.tipoServicio, art.tarticulo.descripcion, art.tarticulo.marca, art.tarticulo.modelo from art.tarticulo join ord.torden on art.tarticulo.idA = ord.torden.idArticulo and $clienteid=ord.torden.idCliente and art.tarticulo.estado = Reparado ' );

    	// return $datos;
    }
}
?>