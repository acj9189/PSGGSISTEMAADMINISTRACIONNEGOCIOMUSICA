<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\articulo;
use App\cliente;
use App\ordenServicio;
use Illuminate\Http\Request;

use Carbon\Carbon;


class RegistraEntradaArticulo extends Controller
{

	
   public function insert(Request $request){
 		
   		$this->validate($request, [
   			//'cc' => 'required',
   			'numero_Serie' => 'required',
   			'nombre' => 'required',
   			'marca' => 'required',
   			'modelo' => 'required',
   			'reporte' => 'required',
   		]);

      $date = Carbon::now();

      

      $articuloC=$request->input('tipoServicio');
      if($articuloC=='on'){
         $articuloC='garantia';
      }
      else{
         $articuloC='reparación';
      }

 		$articulo= \DB::table('tarticulo')->insertGetId([ 
      'tipoServicio' => $articuloC,
      'numero_Serie' => $request->input('numero_Serie'),
 		'descripcion'=> $request->input('nombre'),
 		'marca' => $request->input('marca'),
 		'modelo' => $request->input('modelo'),
 		'estado' =>'0', 'problema_reportado' => $request->input('reporte'),
      'fecha_ingreso' => $date,
      'fecha_salida' => $date 
   ]);

       $clienteid = \DB::table('tcliente')->select('idC')->where('cedula','=',$request->input('cc'))->get();

      $orden = \DB::table('torden')->insertGetId([
         'idCliente' =>$clienteid->first()->idC,
         'idArticulo' => $articulo,
         'descripcionDiagnostico' =>'',
         'notas' => $request->input('notas'),
         'fecha_Inicio_Diagnostico' => $date,
         'fecha_Fin_Diagnostico' => $date,
         'fecha_Inicio_Reparacion' => $date,
         'fecha_Fin_Reparacion' => $date
      ]) ;
      
     

      $clientenom = \DB::table('tcliente')->select('nombre_Completo', 'telefono_Contacto')->where('cedula','=',$request->input('cc'))->get();
     
     $artiD = \DB::table('tarticulo')->select('descripcion','marca','modelo','numero_Serie','problema_reportado')->where('idA','=',$articulo)->get();

      $ordenD = \DB::table('torden')->select('numero_orden','notas')->where('numero_orden','=',$orden)->get();

      
      return view('paginas.ordenEntrada')->with('ord',$ordenD)
      ->with('cliente',$clientenom)
      ->with('art',$artiD);
   }


   public function insertOrdenServicio(Request $request) {

      
   }
}
