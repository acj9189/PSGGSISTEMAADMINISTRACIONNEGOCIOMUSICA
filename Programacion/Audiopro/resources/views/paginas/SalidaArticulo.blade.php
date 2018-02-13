@extends('layouts.orden')

@section('head')
<title>Registro Salida</title>
@stop


@section('form')
<form name="EntradaArticulo" method="post">
    <table border="0">
      <tr> 
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="cc" name="cc" size="30"></td>
        
      </tr>
      </table>
</form>
@stop
