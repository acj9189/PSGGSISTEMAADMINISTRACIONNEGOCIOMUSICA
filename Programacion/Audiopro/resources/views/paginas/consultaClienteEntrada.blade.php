@extends('layouts.orden')

@section('head')
<title>Registro Entrada</title>
@stop
@section('form')


<form action="layouts/{cc}" id="ConsultarCliente" name="ConsultarCliente" method="get">
  
    <table border="0">
      <tr> 
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="cc" name="cc" size="20" value="{{ old('cc') }}">
        <button id="validarNombre" name="validarNombre" form="ConsultarCliente"  >Buscar</button>
        
        </td>
        
      </tr>
    </table>  
    
   </form> 

  @stop