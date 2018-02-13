<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\users;
use App\Http\Controllers\Controller;
class login extends Controller
{
  public function validar (Request $request){

   $usuarioA = \DB::table('users')->select('*')
   -> where(['cedula', '=',$request->input('usuario')],
    ['password', '=', $request->input('contrasena')])->get();
   if ($usuarioA[0]->cargo == 'secretaria') {
     return view('paginas.ConsultarEstadoArticulo');
   }
   elseif ($usuarioA[0]->cargo == 'tecnico') {
     return view('paginas.consultar_articulos');
   }

 }

 public function regrol(Request $request){

  $usuario = new users;
  $usuario->cedula=$request->input('cedula');
  $usuario->nombre=$request->input('nombre');
  $usuario->apellido=$request->input('apellido');
  $usuario->email=$request->input('email');
  $usuario->cargo=$request->input('cargo');
  $usuario->password=$request->input('contrasena');

  $usuario->save();
  return view('layouts.LogIn');


}


}
?>