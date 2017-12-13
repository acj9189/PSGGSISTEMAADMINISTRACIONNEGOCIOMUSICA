@extends('layouts.orden')

@section('head')
<title>Registro Entrada</title>
@stop
@section('form')
<table border="0">
      
</table>
<form action='RegistraEntradaArticulo/{cc}' id="EntradaArticulo" name="EntradaArticulo" method="POST">
<input type="hidden" name="_token" value= "{{ csrf_token() }}"></input>

@if (count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li> {{ $error }} </li>
        @endforeach
        </ul>
        </div>
      @endif
    <table border="0">
      <tr> 
        @foreach($cliente as $cli)
        <td><h6> Cédula(Nit):</h6></td>
        <td><input type="text" id="cc" name="cc" size="20" value="{{ $cli->cedula }}">
        </td>
      </tr>
      <tr>
        <td><h6> Nombre:</h6></td>
        <td><input type="text" id="nombre" name="nombre" size="40" value="{{ $cli->nombre_Completo }}">
        </td>
        @endforeach
      </tr>  
      <tr>
        <td><h6> </h6></td>
        <td><h6><input type="radio" id="tipoServicio" name="tipoServicio">Garantía</h6></td>
        
      </tr>
      
      <tr>
        <td><h6>Artículo:</h6></td>
        <td><input type="text" id="nombre" name="nombre" size="40" value="{{ old('nombre') }}"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Modelo:</h6></td>
        <td><input type="text" id="modelo" name="modelo" size="20" value=" {{ old('modelo') }}"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Marca:</h6></td>
        <td><input type="text" id="marca" name="marca" size="20" value="{{ old('marca') }}"></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td><h6>Serie:</h6></td>
        <td><input type="text" id="numero_Serie" name="numero_Serie" size="20" value="{{ old('numero_Serie') }}"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><h6>Problema Reportado:</h6></td>
      </tr>
  }
  }
      
</table>

<div class="col-xs-9">
<textarea type="text" id="reporte" name="reporte" style="width:650px; height:80px"></textarea>
</div>
<div class="col-xs-9">
<h6>Notas:</h6>
<textarea type="text" id="notas" name="notas" style="width:650px; height:40px"></textarea>
</div>
<div class="col-xs-9" style="text-align:center" >
<button  id="imprimir" name="imprimir" form="EntradaArticulo" >Registrar Entrada</button></div>
</form>
@stop