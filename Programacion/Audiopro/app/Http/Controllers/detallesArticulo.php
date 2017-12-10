<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\orden;
use App\Http\Controllers\Controller;
class detallesArticulo extends Controller
{	public function index (Request $request,$id,$estado = null){
	if(!$estado){
		$orden = \DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
		join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('idArticulo','=',$id)->get();
		return view('paginas.detalles')->with('orden', $orden);


	}else{
		
		\DB::table('tarticulo')->where('ida','=',$id)->update(['estado' => $estado]);
		$orden = \DB::table('torden')->join('tarticulo','torden.idArticulo','=','tarticulo.idA')->
		join('tcliente','torden.idCliente','=','tcliente.idC')->select('*')-> where('idArticulo','=',$id)->get();
		return view('paginas.detalles')->with('orden', $orden);
		



	}

}

}
?>