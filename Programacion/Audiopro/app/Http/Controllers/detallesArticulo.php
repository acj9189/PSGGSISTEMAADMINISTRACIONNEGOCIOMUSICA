<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\articulo;
use App\Http\Controllers\Controller;
class detallesArticulo extends Controller
{	public function index (Request $request,$id,$estado = null){
	if(!$estado){
		$articulo = \DB::table('tarticulo')->select('*')->
		where('ida','=',$id)->get();
		return view('paginas.detalles')->with('articulo', $articulo);


	}else{
		
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => $estado]);
		$articulo = \DB::table('tarticulo')->select('*')->
		where('ida','=',$id)->get();
		return view('paginas.detalles')->with('articulo', $articulo);
		



	}

}

}
?>