@extends('layouts.orden')

@section('head')
 <title>Detalles</title>
@stop

@section('form')

<form name="Detalles" method="post">
  <table>
        <tr>
          <td><h1>Ingresa numero de orden de servicio:</h1></td>
        </tr>
        <tr >
         <td><input type="text" name="Norden" id="Norden"></td>
         <tr>
         <td><input type="submit" name="consulta" value="Consultar" ></td>
         <td><input type="hidden" name="_token" value="{{ csrf_token() }}"/></td>
       </tr>
       </tr>
  </table>
</form>
@stop