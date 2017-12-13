@extends('layouts.orden')

@section('head')
<title>Registro Salida</title>
@stop


@section('form')
<form action="salida/{ac}" name="salidaArticulo" id="salidaArticulo" method="get">
    <table border="0">
      <tr> @foreach($cliente as $cli)
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="ac" name="ac" size="30" value="{{ $cli->cedula }}" >
        <button id="buscarOrden" name="buscarOrden" form="salidaArticulo"  >Buscar</button>
        </td>
        @endforeach
      </tr>
      
      <tr>

      	<td>Tipo Servicio</td>
      	<td>Artículo</td>
      	<td>Marca</td>
      	<td>Modelo</td>
      	
      </tr>
      <tr>
        @foreach($articulo as $art)
        <td>{{ $art->tipoServicio }}</td>
        <td>{{ $art->descripcion }}</td>
        <td>{{ $art->marca }}</td>
        <td>{{ $art>modelo }}</td>
        <td><a href="" >Imprimir</a></td>
        @endforeach
      </tr>
      </table>
</form>
@stop
