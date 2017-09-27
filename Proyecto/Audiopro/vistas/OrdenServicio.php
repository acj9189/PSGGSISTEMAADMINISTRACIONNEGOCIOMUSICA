<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="../includes/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="../includes/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.js"></script>
<script src="../Scripts/javascript2.js"  language="javascript1.5"></script>
<script src="../Scripts/javascript1.js" language="javascript1.5"></script>
<meta charset="utf-8">
<link href="../css/estilo.css" type="text/css" rel="stylesheet">
<link href="../includes/boostrap3/css/bootstrap.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../imagenes/icono.png" rel="icon">  
<title>Administrador</title>

</head>

<body onLoad="cargar();">
<div class="container">
<table class="orden">
<tr>
<td ><h4>AUDIOPRO MANIZALES</h4>
<p style="line-height:normal; font-size: 11pt"><h6>NIT 75087637-8</h6></p>
<p style="line-height:normal; font-size: 11pt"><h6>CLL 62 12 A 34</h6></p>
<p style="line-height:normal; font-size: 11pt"><h6>TEL: 8900885</h6></p>
<p style="line-height:normal; font-size: 11pt"><h6>audiopromanizales@hotmail.com</h6></p>
</td>
<td >
<img src="../imagenes/logo.png" width="130" height="80">
</td>

</tr>
</table>

<table >
<tr>
<td class="orden1">
Numero de Orden:</td>
<td class="orden2" id="numeroOrden">
</td>

<td class="hora">Fecha: <script type="text/javascript">
var d = new Date();
var m=d.getMonth()+1;
document.write(' '+d.getDate(),'/ '+m,'/ '+d.getFullYear());
</script>
</td>
</tr> 
</table>
<table >
<tr>
<td class="orden1">
Nombre:</td>
<td class="orden3" id="nombreCli" >
</td>
<td class="orden1">
Teléfono:
</td>
<td class="orden3" id="telC">
</td>
</tr>
<tr>
<td class="orden1">
Artículo:</td>
<td class="orden2" id="articuloC">
</td>
<td class="orden1">
Modelo:</td>
<td class="orden2" id="modeloC">
</td>
</tr>
<tr>
<td class="orden1">
Marca:</td>
<td class="orden2" id="marcaC">
</td>
<td class="orden1">
Serie:</td>
<td class="orden2" id="serieC">
</td>
</tr>
<tr>
<td class="orden1">
Activo Fijo:</td>
<td class="orden2" id="activofijoC">
</td>
<td class="orden1">
OT:</td>
<td class="orden2" id="otC">
</td>
</tr>
</table>
<table>
<tr>
<td class="orden1">
Problema Reportado: </td>
<td class="orden4" id="problema">
</td>
</tr>
</table>
<table>
<tr>
<td class="orden1">
Notas: </td>
<td class="orden5" id="notas">
</td>
</tr>
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

</div>
</body>
</html>

