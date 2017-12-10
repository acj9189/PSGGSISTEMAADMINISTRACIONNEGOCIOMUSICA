@extends('layouts.orden')

@section('head')
 <title>Detalles</title>
@stop

@section('form')
<form name="Detalles" method="post">
 <div name = "container">
  <div style= "padding-left: 80px">
      <table name = "info" style = "border : 1px solid">
        <tr>
          <td>ID:</td>
          <td style = "padding-left: 80px">{{$orden[0]->idArticulo}}</td>
        </tr>
        <tr>
          <td>Nombre Cliente:</td>
          <td style = "padding-left: 80px">{{$orden[0]->nombre_Completo}}</td>  
        </tr>
        <tr>
          <td>Correo:</td>  
          <td style = "padding-left: 80px">{{$orden[0]->email}}</td>
        </tr>

        <tr>
          <td>Articulo:</td>
          <td style = "padding-left: 80px">{{$orden[0]->modelo}}</td>
        </tr>

        <tr>
          <td>Marca:</td>
          <td style = "padding-left: 80px">{{$orden[0]->marca}}</td>
        </tr>

        <tr>
          <td>Fecha Ingreso:</td>
          <td style = "padding-left: 80px">{{$orden[0]->fecha_Ingreso}}</td>
        </tr>

      </table>
    </div>  
    <div  style="padding-left: 80px">
      <table name = "botones">
        <tr>
          <td><input type="button" onClick="document.location = 'http://localhost/Audiopro/public/consultar'" name="cancelar" value="salir"></td>
           </tr>
      </table>
    </div>
      
  </div>
</form>
@stop