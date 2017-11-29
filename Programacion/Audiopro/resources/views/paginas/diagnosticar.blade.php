@extends('layouts.orden')

@section('head')
<title>Diagnosticar</title>
@stop

@section('form')
<form name="diagnosticar" method="post">
 <div name = "container">
  <h1>Diagnosticar </h1>
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
    </textarea>
    <div style = "margin-top: 30px; margin-bottom: 30px;">
      <table>
        <tr>
          <td>Costo:</td>
          <td><input type="text" name="costo" id = "costo"></td>
        </tr>
        <tr >
         <td><input type="button" onClick="document.location = 'http://localhost/prueba2/public/consultar'" name="cancelar" value="cancelar"></td>
         <td><input type="submit" name="Diagnosticar" value="Diagnosticar" ></td>
         <td><input type="hidden" name="_token" value="{{ csrf_token() }}"/></td>
       </tr>
     </table>
   </div>
 </div>

</div>
</form>
@stop