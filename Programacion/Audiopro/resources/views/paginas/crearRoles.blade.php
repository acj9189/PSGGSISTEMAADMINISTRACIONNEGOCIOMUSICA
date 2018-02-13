@extends('layouts.orden')

@section('head')
 <title>Roles</title>
@stop
@section('form')
<form name="roles" method="post">
    <h4>Registrar un nuevo usuario: </h4>
    <table border="0">
      <tr> 
        <td><h6> Cédula:</h6></td>
        <td><input type="text" id="cedula" name="cedula" size="10"></td>
        
      </tr>
      <tr>
        <td><h6>Nombre:</h6></td>
        <td><input type="text" id="nombre" name="nombre" size="30"></td>
      </tr>
      <tr>
        <td><h6>Apellido:</h6></td>
        <td><input type="text" id="apellido" name="apellido" size="30"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Email:</h6></td>
        <td><input type="text" id="email" name="email" size="40"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Cargo:</h6></td>
        <td><input type="text" id="art" name="art" size="10"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Contraseña:</h6></td>
        <td><input type="password" id="contrasena" name="contrasena" size="10"></td>
        <td></td>
        <td></td>
      </tr>
      
</table>
<input type="submit" name = "registrar" value="registrar"/>
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
</form>
@stop