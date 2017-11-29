<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class reparar extends Controller
{
	public function index(Request $request,$id,$estado = null){
		if(!$estado){
			$articulo = \DB::table('tarticulo')->select('*')->
			where('ida','=',$id)->get();
			return view('paginas.reparar')->with('articulo', $articulo);
		}
		

	}
	public function insert (Request $request,$id){
		$this->validate($request,[
			'descripcion' => 'required',
		]);
		
		\DB::table('tarticulo')->where('ida','=',$id)->update(['descripcion' =>$request->input('descripcion')]);
		\DB::table('tarticulo')->where('ida','=',$id)->update(['fecha_salida' =>date("y/m/j")]);
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => 5]);
		$articulo = \DB::table('tarticulo')->get();
		return view('paginas.consultar_articulos')->with('articulos', $articulo);

	}
}
?>