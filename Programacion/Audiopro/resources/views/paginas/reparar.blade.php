@extends('layouts.orden')

@section('head')
<title>Diagnosticar</title>
@stop

@section('form')
<form name="reparar" method="post">
 <div name = "container">
  <h1>Finalizar Reporte</h1>
  <div>
    <div style = "margin-top: 30px; margin-bottom: 30px;">
      <table style = "border : 1px solid ">
        <tr>
          <td>ID:</td>
          <td style = "padding-left: 80px">{{$articulo[0]->idA}}</td>
        </tr>

        <tr>
          <td>Nombre:</td>
          <td style = "padding-left: 80px">{{$articulo[0]->modelo}}</td>
        </tr>

        <tr>
          <td>Marca:</td>
          <td style = "padding-left: 80px">{{$articulo[0]->marca}}</td>
        </tr>

        <tr>
          <td>Fecha Ingreso:</td>
          <td style = "padding-left: 80px">{{$articulo[0]->fecha_Ingreso}}</td>
        </tr>


      </table>
    </div>
    <h3>Descripcion</h3>
    <textarea name = "descripcion" id = "descripcion">
      {{$articulo[0]->descripcion_Diagnostico}}
    </textarea>
    <div style = "margin-top: 30px; margin-bottom: 30px;">
      <table>
        <tr >
         <td><input type="button" onClick="document.location = 'http://localhost/Audiopro/public/consultar'" name="cancelar" value="cancelar"></td>
         <td><input type="submit" name="reparar" value="reparar" ></td>
         <td><input type="hidden" name="_token" value="{{ csrf_token() }}"/></td>
       </tr>
     </table>
   </div>
 </div>

</div>
</form>
@stop