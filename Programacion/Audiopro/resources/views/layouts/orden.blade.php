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
  @yield('head')

</head>

<body >


  <!header >
  <!img src="{{ asset('imagenes/BannerAudiopro.jpg')}}" width="1080" >
  <!/header>
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

      <div class="container1">
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




        <section class="section">

     <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3 " >
      @yield('form')
    </div>



  </section>
</div>

</body>
</html>

