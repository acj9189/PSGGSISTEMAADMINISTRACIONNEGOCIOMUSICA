@extends('layouts.orden')

@section('head')
<title>Estado Articulo</title>
@stop

@section('form')
<div name="container" style="padding-left: 30px">
  <table border = "1">
    <tr>
     <h4>Estado de tus artculos: </h4>
   </tr>

   <tr >
    <td>Nombre Articulo: </td>
    <td>{{$orden[0]-> notas}}</td>
  </tr>

  <tr >
    <td>Marca: </td>
    <td>{{$orden[0]->marca}}</td>
  </tr>

  <tr>
    <td>Estado:</td>
    @if($orden[0] ->estado == 1 )
    <td>
     <a> Su artiuculo esta siento revisado por los expertos...</a>
   </td>
   @endif

   @if($orden[0] ->estado == 2 )
   <td>
    Su artiuculo a sido diagnosticado: {{$orden[0]->descripcion_Diagnostico}}
  </td>
  <button>aceptar reparacion</button>
  <button onclick= "miFuncion()" >Rechazar</button>
  <script type="text/javascript">
    function miFuncion()
    {
     if(confirm("La reparacion a sido rechazada, recuerda que el cobro por la revisión es de $20.000 y que a partir del día siguiente, se cobraran $1000 por bodegaje")){

       location.href = "http://localhost/Audiopro/public/consultarestado/".concat({{$orden[0]->idArticulo}});
     }
   }
 </script>

 @endif
 @if($orden[0] ->estado == 3 )
 <td>
  <p>Su articulo esta pendiente de reparacion, se atendera esta solicitud lo mas pronto posible</p>
</td>
@endif
@if($orden[0] ->estado == 4 )
<td>
  <p>Su articulo se encuentra en reparacion<p>
</td>
@endif
@if($orden[0] ->estado == 5 )
<td>
    Su artiuculo a sido reparado, la descripcion final indica:  {{$orden[0]->descripcion_Diagnostico}}
  </td>
  <p>puede acercarse al centro de servicio tecnico lo mas pronto posible para reclamar su producto, recuerde que por cada dia (a partir del dia siguiente a la reparacion) que el producto este alli existira un cobro por bodegaje de $1000 por dia</p>
@endif

@if($orden[0] ->estado == 6 )
<td>
  <p>la reparacion de su articulo a sido rechazada, puede acercarse al centro de servicio tecnico lo mas pronto posible para reclamar su producto, recuerde que por cada dia (a partir del dia siguiente a la reparacion) que el producto este alli existira un cobro por bodegaje de $1000 por dia</p>
</td>
@endif

</tr>
</table>



</div>
@stop