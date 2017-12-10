<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class reparar extends Controller
{
	public function index(Request $request,$id,$estado = null){
		if(!$estado){
			$articulo = \DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
			join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('idArticulo','=',$id)->get();
			return view('paginas.reparar')->with('articulo', $articulo);
		}
		else{
			\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => $estado]);
			\DB::table('torden')->where('idArticulo','=',$id)->update(['fecha_Inicio_reparacion' =>date("y/m/j")]);
			$orden = \DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
			join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('idArticulo','=',$id)->get();
			return view('paginas.detalles')->with('orden', $orden);
		}
		

	}
	public function insert (Request $request,$id){
		$this->validate($request,[
			'descripcion' => 'required',
		]);
		
		\DB::table('torden')->where('idArticulo','=',$id)->update(['descripcion_Diagnostico' =>$request->input('descripcion')]);
		\DB::table('torden')->where('idArticulo','=',$id)->update(['fecha_Fin_reparacion' =>date("y/m/j")]);
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => 5]);
		$articulo = \DB::table('tarticulo')->get();
		return view('paginas.consultar_articulos')->with('articulos', $articulo);

	}
}
?>