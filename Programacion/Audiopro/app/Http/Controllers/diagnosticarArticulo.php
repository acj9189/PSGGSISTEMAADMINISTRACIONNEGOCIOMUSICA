<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class diagnosticarArticulo extends Controller
{
	public function index(Request $request,$id,$estado = null){
		if(!$estado){
			$articulo = \DB::table('tarticulo')->select('*')->
			where('ida','=',$id)->get();
			return view('paginas.diagnosticar')->with('articulo', $articulo);
		}
		

	}
	public function insert (Request $request,$id){
		$this->validate($request,[
			'descripcion' => 'required',
			'costo' => 'required',
		]);
		$desc = $request->input('descripcion')."lo cual tendra un costo de reparacion de: ".$request->input('costo');
		\DB::table('tarticulo')->where('ida','=',$id)->update(['descripcion' => $desc]);
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => 2]);
		$articulo = \DB::table('tarticulo')->get();
		return view('paginas.consultar_articulos')->with('articulos', $articulo);

	}
}
?>