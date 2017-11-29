@extends('layouts.orden')

@section('head')
 <title> consultar articulo </title>
@stop

@section('form')
<div name="container" style="padding-left: 30px">
  <h1>ARTICULOS:<h1>
  <body>
  <h3>Pendiente: <h3> 
    <div style="padding-left: 80px">
      <table border = 1 style = "text-align: left">
        <tr>
          <td style="padding-left: 80px">ID</td>
          <td style="padding-left: 80px">Marca</td>
          <td style="padding-left: 80px">Tipo</td>
          </tr>
  @foreach ($articulos as $aux)
      @if($aux->estado == 0)
        <tr>
          <td style="padding-left: 80px"><a href="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}" style="">{{$aux->idA}}</a></td>
          <td style="padding-left: 80px">{{$aux->marca}}</td>
          <td style="padding-left: 80px">{{$aux->modelo}}</td>
          <td><form action="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}/1"> <input type="submit" value="Revisar"" /> </form></td>
        </tr>
        </tr>
      @endif
  @endforeach

        
      </table>    
    </div>
    <h3>En Revision: <h3> 
    <div style="padding-left: 80px">
      <table border = 1>
        <tr>
          <td style="padding-left: 80px">ID</td>
          <td style="padding-left: 80px">Marca</td>
          <td style="padding-left: 80px">Tipo</td>
         
        </tr>
        @foreach ($articulos as $aux)
      @if($aux->estado == 1)
        <tr>
           <td style="padding-left: 80px"><a href="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}" style="">{{$aux->idA}}</a></td>
          <td style="padding-left: 80px"><h6>{{$aux->marca}}</h6></td>
          <td style="padding-left: 80px"><h6>{{$aux->modelo}}</h6></td>
          <td><form action="http://localhost/prueba2/public/consultar/diagnosticar/{{{$aux->idA}}}"> <input type="submit" value="Diagnosticar" /> </form></td>
        </tr>
      @endif
  @endforeach
      </table>    
    </div>

    <h3>Por Reparar <h3>  
    <div style="padding-left: 80px">
      <table border = 1>
        <tr>
          <td style="padding-left: 80px">ID</td>
          <td style="padding-left: 80px">Marca</td>
          <td style="padding-left: 80px">Tipo</td>

        </tr>
        @foreach ($articulos as $aux)
      @if($aux->estado == 3)
        <tr>
           <td style="padding-left: 80px"><a href="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}" style="">{{$aux->idA}}</a></td>
          <td style="padding-left: 80px"><h6>{{$aux->marca}}</h6></td>
          <td style="padding-left: 80px"><h6>{{$aux->modelo}}</h6></td>
          <td><form action="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}/4"> <input type="submit" value="reparar" /></form></td>
        </tr>
      @endif
  @endforeach
      </table>    
    </div>

    <h3>En Reparacion: <h3> 
    <div style="padding-left: 80px">
      <table border = 1>
        <tr>
          <td style="padding-left: 80px">ID</td>
          <td style="padding-left: 80px">Marca</td>
          <td style="padding-left: 80px">Tipo</td>
          

        </tr>
            @foreach ($articulos as $aux)
      @if($aux->estado == 4)
        <tr>
           <td style="padding-left: 80px"><a href="http://localhost/prueba2/public/consultar/detalles/{{{$aux->idA}}}" style="">{{$aux->idA}}</a></td>
          <td style="padding-left: 80px"><h6>{{$aux->marca}}</h6></td>
          <td style="padding-left: 80px"><h6>{{$aux->modelo}}</h6></td>
          <td><form action="http://localhost/prueba2/public/consultar/reparar/{{{$aux->idA}}}"> <input type="submit" value="reparar" /></form></td>
        </tr>
      @endif
  @endforeach
      </table>    
    </div>

</div>
@stop