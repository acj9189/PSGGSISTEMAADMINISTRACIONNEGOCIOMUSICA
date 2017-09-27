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

<body >
<header class="headerAdmin">
<img src="../imagenes/logo.png" width="230" height="140">
</header>
<nav class="navA">
<div >
<table class="tabla1" ><tr></tr>
<tr>
<td class="opciones1">     </td>
<td class="opciones1">     </td>
<td class="opciones1">     </td>
<td class="opciones1">     </td>
<td class="opciones1"></td>
<td class="opciones1">   </td>
<td class="opciones1">   </td>
<td class="opciones1"><h6 class="letralink">Usuario:  </h6></td>
<td ><h6 class="letralink"><?php session_start();
$user=$_SESSION['usuario'];
echo $user; ?> </h6></td>
<td class="opciones1">
<h6 class="letraIngreso">
<button name="cerrar" id="cerrar" >Cerrar Sesión</button></h6>     </td>

</tr>

</table>
</div>
</nav>
<div class="container1">
<section class="section">

<div class="col-xs-3">
<div id="wrapper">
 
    <ul class="menu">
        <li class="item1"><a href="#">Entrada - Artículo </a>
            <ul>
                <li class="subitem1"><a  href="../vistas/orden.php" >Registrar Entrada</a></li>
                  <li class="subitem1"><a href="#" >Consultar Registro</a></li>
                  <li class="subitem1"><a href="#">Eliminar Registro</a></li>
                  <li class="subitem1"><a href="#">Modificar Registro</a></li>
                
            </ul>
        </li>
        <li class="item1"><a href="#">Salida -  Artículo</a>
            <ul>
                  <li class="subitem1"><a href="#">Registrar salida</a></li>
                   <li class="subitem1"><a href="#" >Consultar salida</a></li>
                  <li class="subitem1"><a href="#">Eliminar salida</a></li>
                  <li class="subitem1"><a href="#">Modificar salida</a></li>
                  
                
            </ul>
        </li>
        
        <li class="item1"><a href="#">Diagnóstico</a>
            <ul>
            	<li class="subitem1"><a  href="#">Diagnosticar Entradas</a></li>
                                
                
            </ul>
        </li>
        <li class="item1"><a href="#">Reparaciones</a>
            <ul>
            	<li class="subitem1"><a  href="consultaEvaluadores.html" target="f1">Ver autorizaciones</a></li>
                
            </ul>
        </li>
        </li>
       
    </ul>
 
</div>
<div class="input1">
Número de Orden:</div>
<input type="text" id="ordend" name="ordend">
<button name="busordend" id="busordend">Buscar</button>
</div>
<div class="col-xs-9 tamiframe">
<table class="input1">
<tr>
<td class="orden1">
Fecha de Entrada:</td>
<td class="orden2" id="fechaD">
</td>
</tr>
</table>

<table class="input1">

<tr>
<td class="orden1">
Artículo:</td>
<td class="orden3" id="articuloD">
</td>
<td class="orden1">
Modelo:</td>
<td class="orden3" id="modeloD">
</td>
</tr>
<tr>
<td class="orden1">
Marca:</td>
<td class="orden3" id="marcaD">
</td>
<td class="orden1">
Serie:</td>
<td class="orden3" id="serieD">
</td>
</tr>
<tr>
<td class="orden1">
Activo Fijo:</td>
<td class="orden3" id="activofijoD">
</td>
<td class="orden1">
OT:</td>
<td class="orden3" id="otD">
</td>
</tr>
</table>
<table class="input1">
<tr>
<td class="orden1">
Problema Reportado: </td>
<td class="orden4" id="problemaD">
</td>
</tr>
</table>
<table>
<tr>
<td class="orden1">
Notas: </td>
<td class="orden5" id="notasD">
</td>
</tr>
</table>
<div class="col-xs-12 input1">
Diagnosticar:
</div>
<div class="col-xs-12">
<textarea type="text" id="diagnostico" name="diagnostico" style="width:900px; height:80px"></textarea>
</div>
<div class="col-xs-12">
Costo Reparación:
<input type="text" id="costo" name="costo">
</div>
<div class="col-xs-12 input1" style="text-align:center">
<button id="registrarD" name="registrarD">Registrar Diagnóstico</button>
</div>

</div>
</section>
</div>
<footer class="footer">
<div class="col-xs-6 derechos"> 
<img src="../imagenes/LogoYamahaMusical.png" width="130" height="50">
<h6 class="letralink">Servicio Autorizado</h6>
</div>
<div class="col-xs-12 izquierdo">
Email: audiopromanizales@hotmail.com
<p>Celular: 310 300 94 35</p>
<p>Teléfono: 890 08 85</p>
</div>

</footer>
</body>
</html>

