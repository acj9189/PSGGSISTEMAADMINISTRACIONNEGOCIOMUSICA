<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class diagnosticarArticulo extends Controller
{
	public function index(Request $request,$id,$estado = null){
		if(!$estado){
			$articulo = \DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
		join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('idArticulo','=',$id)->get();
			return view('paginas.diagnosticar')->with('articulo', $articulo);
		}
		

	}
	public function insert (Request $request,$id){
		$this->validate($request,[
			'descripcion' => 'required',
			'costo' => 'required',
		]);
		$desc = $request->input('descripcion')." lo cual tendra un costo de reparacion de: ".$request->input('costo');
		\DB::table('torden')->where('idArticulo','=',$id)->update(['descripcion_Diagnostico' => $desc]);
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => 2]);
		\DB::table('torden')->where('idArticulo','=',$id)->update(['fecha_Fin_Diagnostico' =>date("y/m/j")]);
		$articulo = \DB::table('tarticulo')->get();
		return view('paginas.consultar_articulos')->with('articulos', $articulo);

	}
}
?>