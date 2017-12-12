@extends('layouts.orden')

@section('head')
<title>Registro Entrada</title>
@stop


@section('form')

  <form name="CrearCliente" method="post" action="{{ url('crearClienteI') }}">
    <table border="0">
      <tr>
        <td><h6> Cédula:</h6></td>
        <td><input type="text" id="cc" name="cc" size="30"></td>

      </tr>
      <tr>
        <td><h6 size="10">Nombres:</h6></td>
        <td>
          <input type="text" name="names" size="30" >

        </td>
      </tr>
      <tr>
        <td ><h6 size="10">Apellidos:</h6></td>
        <td><input type="text" name="lastnames" size="30" ></td>
      </tr>
      <tr>
        <td ><h6 size="10">Teléfono:</h6></td>
        <td><input type="text" name="phonenumber" size="30" ></td>
      </tr>
      <tr>
        <td ><h6 size="10">email:</h6></td>
        <td><input type="email" name="email" size="30" ></td>
      </tr>
      {{csrf_field()}}
    </table>

    <div class="col-xs-5" style="text-align:center" >
      <button type="submit" name="save" ><a rel=alternate media=print> Ingresar Cliente</a></button>

    </div>
  </form>

@endsection