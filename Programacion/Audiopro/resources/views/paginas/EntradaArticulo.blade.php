@extends('layouts.orden')

@section('head')
<title>Registro Entrada</title>
@stop

@section('form')
<form name="EntradaArticulo" method="post">
    <table border="0">
      <tr> 
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="cc" name="cc" size="30"></td>
        
      </tr>
      <tr>
        <td><h6>Nombre:</h6></td>
        <td><input type="text" id="nom" name="nom" size="30"></td>
        <td ><h6 size="10">Teléfono:</h6></td>
        <td><input type="text" id="tel" name="tel" size="30"></td>
      </tr>
      <tr>
        <td><h6> Tipo:</h6></td>
        <td><h6><input type="radio" id="garantia" name="tipoEntrada" >Reparación</h6></td>
        <td><input type="radio" id="reparacion" name="tipoEntrada" ></td>
        <td><h6>Garantía</h6></td>
      </tr>
      <tr>
        <td><h6>Artículo:</h6></td>
        <td><input type="text" id="art" name="art" size="30"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Modelo:</h6></td>
        <td><input type="text" id="art" name="art" size="30"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Marca:</h6></td>
        <td><input type="text" id="art" name="art" size="30"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Serie:</h6></td>
        <td><input type="text" id="art" name="art" size="30"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><h6>Problema Reportado:</h6></td>
      </tr>
      
</table>
<div class="col-xs-9">
<textarea type="text" id="reporte" name="reporte" style="width:650px; height:80px"></textarea>
</div>
<div class="col-xs-9">
<h6>Notas:</h6>
<textarea type="text" id="notas" name="notas" style="width:650px; height:40px"></textarea>
</div>
<div class="col-xs-9" style="text-align:center" >
<button id="imprimir" name="imprimir" ><a rel=alternate media=print href="{{ asset('ordenServicio')}}"> Generar Orden</a></button></div>
</form>
@stop