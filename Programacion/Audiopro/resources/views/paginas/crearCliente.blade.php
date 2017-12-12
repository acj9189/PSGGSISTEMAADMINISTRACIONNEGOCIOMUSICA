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
          <input type="text" id="name" name="name" size="30" value="{{$names}}">{{csrf_token()}}
        </td>
      </tr>
      <tr>
        <td ><h6 size="10">Apellidos:</h6></td>
        <td><input type="text" id="ape" name="ape" size="30" value="{{$lastnames}}"></td>
      </tr>
      <tr>
        <td ><h6 size="10">Teléfono:</h6></td>
        <td><input type="text" id="tel" name="tel" size="30" value="{{$phonenumber}}"></td>
      </tr>
      <tr>
        <td ><h6 size="10">email:</h6></td>
        <td><input type="email" id="email" name="email" size="30" value="{{$email}}"></td>
      </tr>
    </table>

    <div class="col-xs-5" style="text-align:center" >
      <button type="submit" id="guardar" name="guardar" ><a rel=alternate media=print> Ingresar Cliente</a></button>

    </div>
  </form>

@endsection