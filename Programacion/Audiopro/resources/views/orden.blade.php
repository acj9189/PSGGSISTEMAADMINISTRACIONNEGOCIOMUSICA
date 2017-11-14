<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="{{ asset('jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.js')}}"></script>
<script src="{{ asset ('Scripts/javascript2.js') }}"  language="javascript1.5"></script>
<script src="{{ asset ('Scripts/javascript1.js') }}" language="javascript1.5"></script>
<meta charset="utf-8">
<link href="{{ asset('css/estilo.css')}}" type="text/css" rel="stylesheet">
<link href="{{ asset ('boostrap3/css/bootstrap.css')}}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('imagenes/icono.png')}}" rel="icon">  
<title>AudioPro</title>

</head>

<body >


<header >
<img src="{{ asset('imagenes/BannerAudiopro.jpg')}}" width="1080" >
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
<td ><h6 class="letralink"> ?php session_start();
$user=$_SESSION['usuario'];
echo $user; ? </h6></td>
<td class="opciones1">
<h6 class="letraIngreso">
<button name="cerrar" id="cerrar" >Cerrar</button></h6>     </td>

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
                <li class="subitem1"><a  href="{{ asset('views/orden')}}" >Registrar Entrada</a></li>
                  <li class="subitem1"><a href="../vistas/ordenConsulta.php" >Consultar Entradas</a></li>
                  <li class="subitem1"><a href="#">Eliminar Entradas</a></li>
                  <li class="subitem1"><a href="#">Modificar Entrada</a></li>
                
            </ul>
        </li>
        <li class="item1"><a href="#">Salida -  Artículo</a>
            <ul>
                  <li class="subitem1"><a href="#">Registrar salida</a></li>
                   <li class="subitem1"><a href="#" >Consultar salidas</a></li>
                  <li class="subitem1"><a href="#">Eliminar salida</a></li>
                                   
                
            </ul>
        </li>
        
        <li class="item1"><a href="#">Cliente</a>
            <ul>
            	<li class="subitem1"><a  href="">Nuevo Cliente</a></li>
                                
                
            </ul>
        </li>
        <li class="item1"><a href="#">Cobros</a>
            <ul>
            	<li class="subitem1"><a  href="" target="f1">Consultar Cobros</a></li>
                
            </ul>
        </li>
        </li>
       
    </ul>
 
</div>
</div>
<div class="col-xs-9 tamiframe">
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
<button id="imprimir" name="imprimir" >Generar Orden</button></div>
</form>
</div>



</section>
</div>
<footer class="footer">
<div class="col-xs-6 derechos"> 
<img src="{{ asset('imagenes/LogoYamahaMusical.png') }}" width="130" height="50">
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

