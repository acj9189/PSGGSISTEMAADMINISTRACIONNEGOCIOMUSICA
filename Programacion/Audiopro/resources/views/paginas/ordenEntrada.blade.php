@extends('layouts.ordenServicio')

@section('head')
<title>Orden de Servicio</title>
@stop

@section('form')

<table >
<tr>
@foreach($ord as $or)
<td class="orden1">
Numero de Orden:</td>

<td class="orden2" id="numeroOrden" >
		{{$or->numero_orden}}
	
</td>
@endforeach
<td class="hora">Fecha: <script type="text/javascript">
var d = new Date();
var m=d.getMonth()+1;
document.write(' '+d.getDate(),'/ '+m,'/ '+d.getFullYear());
</script>
</td>
</tr> 
 
</table>
<table >
@foreach($cliente as $cli)
<tr>

<td class="orden1">
Nombre:</td>
<td class="orden3" id="nombreCli" >
	{{$cli->nombre_Completo}}
</td>
<td class="orden1">
Teléfono:
</td>
<td class="orden3" id="telC">
	{{$cli->telefono_Contacto}}
</td>

</tr>
@endforeach

<tr>
@foreach($art as $arti)	
<td class="orden1">
Artículo:</td>
<td class="orden2" id="articuloC">
	{{$arti->descripcion}}
</td>
<td class="orden1">
Modelo:</td>
<td class="orden2" id="modeloC">
	{{$arti->modelo}}
</td>
</tr>
<tr>
<td class="orden1">
Marca:</td>
<td class="orden2" id="marcaC">
	{{$arti->marca}}
</td>
<td class="orden1">
Serie:</td>
<td class="orden2" id="serieC">
	{{$arti->numero_Serie}}
</td>
</tr>
<tr>

</tr>
</table>
<table>
<tr>
<td class="orden1">
Problema Reportado: </td>
<td class="orden4" id="problema">
	{{$arti->problema_reportado}}
</td>

</tr>
@endforeach
</table>

<table>
	 @foreach($ord as $or) 
<tr>
	
<td class="orden1">
Notas: </td>
<td class="orden5" id="notas">
	{{$or->notas}}
</td>

</tr>
@endforeach
</table>
<table>
 <tr>
 <td class="orden6">
 <h6 class="textaling">Firma del Cliente: __________________________________</h6>
 </td>
 
 </tr>
</table>
<table>
 <tr>
 <td class="orden6">
 <h6>UNA VEZ HAYA RECIBIDO AVISO QUE SU ARTICULO ESTA LISTO PARA SER RETIRADO, SE CARGARAN A SU SALDO ($1000)PESOS DIARIOS POR CONCEPTO DE BODEGAJE, ACUMULABLES HASTA 60 DIAS, (LEY 1480 DE 2011). SI ESTE NO ES RETIRADO EN EL TIEMPO ESTIPULADO, AUDIOPRO MANIZALES ASUMIRA QUE EL ARTICULO FUE ABANDONADO Y SE HARA USO DE SU PROPIEDAD.</h6>
 </td>
 </tr>
</table>

@stop
