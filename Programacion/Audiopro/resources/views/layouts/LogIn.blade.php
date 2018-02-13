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


	<style type="text/css">
	<!--Carrusel de imagenes
	body {margin:0; padding:0; background:#fff;}
	#slidebox{position:relative; border:1px solid #ccc; margin:60px auto;overflow:hidden;}
	#slidebox, #slidebox ul {width:600px;height:330px;}
	#slidebox, #slidebox ul li{width:600px;height:330px;}
	#slidebox ul li{position:relative; left:0; background:#eee; float:left;list-style: none;padding-bottom: 40px;font-family:Verdana, Geneva, sans-serif; font-size:13px;}
	#slidebox .next, #slidebox .previous{position:absolute; z-index:2; display:block; width:21px; height:21px;top:139px;}
	#slidebox .next{right:0; margin-right:10px; background:url(imagenes/slidebox_next.png) no-repeat left top;}
	#slidebox .next:hover{background:url(imagenes/slidebox_next_hover.png) no-repeat left top;}
	#slidebox .previous{margin-left:10px; background:url(imagenes/slidebox_previous.png) no-repeat left top;}
	#slidebox .previous:hover{background:url(imagenes/slidebox_previous_hover.png) no-repeat left top;}
	#slidebox .thumbs{position:absolute; z-index:2; bottom:10px; right:10px;}
	#slidebox .thumbs a{display:block; margin-left:5px; float:left; font-family:Verdana, Geneva, sans-serif; font-size:9px; text-decoration:none; padding:2px 4px; background:url(imagenes/slidebox_thumb.png); color:#fff;}
	#slidebox .thumbs a:hover{background:#fff; color:#000;}
	#slidebox .thumbs .thumbActive{background:#fff; color:#000; display:block; margin-left:5px; float:left; font-family:Verdana, Geneva, sans-serif; font-size:9px; text-decoration:none; padding:2px 4px;}
	-->
</style>


<title>Audiopro</title>
</head>

<body>
	<nav class="navA">
		<form name="login" method="post" >
			<div class="col-xs-12">
				<table class="tablanav">
					<tr>
						<td class="opciones1"></td>
						<td class="opciones1"></td>
						<td class="opciones1"></td>
						<td class="opciones1"></td>
						<td class="opciones1"><h6 class="letralink">Usuario</h6> </td>
						<td class="opciones1"><input type="text" id="usuario">     </td>
						<td class="opciones1"><h6 class="letralink">Contraseña</h6> </td>
						<td class="opciones1"><input type="password" id="contrasena">     </td>
						<td class="opciones1">
							<h6 class="letraIngreso">
								<input type="submit" name="ingresarr" value="Ingresar" />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/></h6>     </td>

							</tr>
						</table>
					</div>
				</form>
			</nav>
			<div class="container">
				<header class="header text-center">
					<div class="col-xs-12">
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1020" height="170" id="FlashID" title="banner">
							<param name="movie" value="imagenes/bannerA.swf">
							<param name="quality" value="high">
							<param name="wmode" value="opaque">
							<param name="swfversion" value="15.0.0.0">
							<!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
							<param name="expressinstall" value="Scripts/expressInstall.swf">
							<!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="imagenes/bannerA.swf" width="1020" height="170">
								<!--<![endif]-->
								<param name="quality" value="high">
								<param name="wmode" value="opaque">
								<param name="swfversion" value="15.0.0.0">
								<param name="expressinstall" value="Scripts/expressInstall.swf">
								<!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
								<div>
									<h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
									<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
								</div>
								<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>
					</div>
				</header>
				<nav class="nav">
					<div class="col-xs-10">
						<table class="tablanav"><tr>
							<td class="opciones1"><a href="index.html" ><h5 class="letralink">Inicio</h5></a>
								<td  class="opciones1"><a href="http://localhost/Audiopro/public/consultarestado" ><h5 class="letralink">Buscar por Número de Orden</h5></a>
									<td  class="opciones1"><a href="#" ><h5 class="letralink">Portafolio de Servicios</h5></a>
									</td>

								</tr>
							</table>
						</div>
					</nav>
					<section class="section1">
						<div id="slidebox">
							<div class="next"></div>
							<div class="previous"></div>
							<div class="thumbs">
								<a href="#" onClick="" class="1 thumbActive">1</a> 
								<a href="#" onClick="" class="2">2</a> 
								<a href="#" onClick="" class="3 ">3</a> 
								<a href="#" onClick="" class="4">4</a> 
								<a href="#" onClick="" class="5">5</a>
								<a href="#" onClick="" class="6">6</a> 
								<a href="#" onClick="" class="7">7</a>
								<a href="#" onClick="" class="8">8</a>
								<a href="#" onClick="" class="9">9</a>
								<a href="#" onClick="" class="10">10</a> 
								<a href="#" onClick="" class="11">11</a>
								<a href="#" onClick="" class="12">12</a>
								<a href="#" onClick="" class="13">13</a>
								<a href="#" onClick="" class="14">14</a>
								<a href="#" onClick="" class="15">15</a>
								<a href="#" onClick="" class="16">16</a>
								<a href="#" onClick="" class="17">17</a>
								<a href="#" onClick="" class="18">18</a>
								<a href="#" onClick="" class="19">19</a>

							</div>
							<ul>
								<li ><img src="imagenes/1412202_10202224054818163_240213507_o.jpg" width="600" height="350" ></li>
								<li ><img src="imagenes/135072_4664327881537_366952609_o - copia.jpg" width="600" height="350"></li>
								<li><img src="imagenes/54607_4664381042866_1311988653_o - copia.jpg" width="600" height="350"></li>
								<li><img src="imagenes/54611_4664348162044_1235372660_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/169427_4664352282147_1658945492_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/169478_4653683695439_1698090461_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/176920_4664365762484_1630638429_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/665836_4664333201670_925650439_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/882030_10202220962020845_1046339940_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/893594_10202220981101322_1275603624_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/963956_10202217795981696_808617010_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/977094_10202220970501057_71590847_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/977104_10202221051503082_869068281_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/980347_10202217736780216_1380890695_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/980651_10202220977821240_1456605723_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/1398596_10202221045462931_400081942_o - copia.jpg" width="600" height="400"></li>
								<li><img src="imagenes/1399200_10202220943220375_1068493822_o.jpg" width="600" height="400"></li>
								<li><img src="imagenes/1485918_10202217683538885_1888231142_o.jpg" width="600" height="400"></li>
								<li><img src="imagenes/SEGUNDAtarjeta de audiopro.PNG" width="600" height="300"></li>
							</ul>
						</div>

					</section>
				</div>
				<footer class="footer">
					<div class="col-xs-6 derechos"> 
						<img src="imagenes/LogoYamahaMusical.png" width="130" height="50">
						<h6 class="letralink">Servicio Autorizado</h6>
					</div>
					<div class="col-xs-12 izquierdo">
						Email: audiopromanizales@hotmail.com
						<p>Celular: 310 300 94 35</p>
						<p>Teléfono: 890 08 85</p>
					</div>

				</footer>

				<script type="text/javascript">
					swfobject.registerObject("FlashID");
				</script>
			</body>
			</html>