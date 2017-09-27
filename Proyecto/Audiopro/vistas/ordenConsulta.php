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
            	<li class="subitem1"><a  href="../vistas/diagnosticar.php">Ver Artículo</a></li>
                                
                
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

</div>
<div class="col-xs-9 tamiframe">


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

