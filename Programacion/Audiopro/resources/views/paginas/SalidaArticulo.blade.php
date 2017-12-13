@extends('layouts.orden')

@section('head')
<title>Registro Salida</title>
@stop


@section('form')
<form action="salida/{ac}" name="salidaArticulo" id="salidaArticulo" method="get">
    <table border="0">
      <tr> 
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="ac" name="ac" size="30" value="{{ old('ac') }}" >
        <button id="buscarOrden" name="buscarOrden" form="salidaArticulo"  >Buscar</button>
      </tr>
      </td>
      </table>
</form>
@stop
