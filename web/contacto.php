<?php
  $id = $_GET["id"];
  $conexion=mysqli_connect("localhost","root","","gecko") or
      die("Problemas con la conexión");
  $registros=mysqli_query($conexion,"select ORG_nombre, ORG_tituloacerca, ORG_correo, ORG_telefono, ORG_direccion
                          from organizacion where ORG_id = '$id'") or
    die("Problemas en el select:".mysqli_error($conexion));

  if ($reg=mysqli_fetch_array($registros)){
    $nombre = $reg['ORG_nombre'];
    $titulo = $reg['ORG_tituloacerca'];
    $correo = $reg['ORG_correo'];
    $telefono = $reg['ORG_telefono'];
    $direccion = $reg['ORG_direccion'];
  }
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Software de Gestión de Inmuebles GECKO</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/justified-nav.css" rel="stylesheet">

    <!-- CSS Propio -->
    <link href="dist/css/propio.css" rel="stylesheet">

    <!-- Iconos de la W3C -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<!-- Mostramos viviendas -->
  	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <header class="masthead">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php?id=<? echo $id ?>"><b><? echo $nombre ?></b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php?id=<? echo $id ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="empresa.php?id=<? echo $id ?>">La empresa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="servicios.php?id=<? echo $id ?>">Servicios</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contacto.php?id=<? echo $id ?>"><span style="color: rgb(40, 167, 69);">Contacto</span></a>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
					<a href="inmuebles.php?id=<? echo $id ?>">
						<button class="btn btn-outline-success my-2 my-sm-0 active" type="submit">Inmuebles</button>
					</a>
				</div>
			</div>
		</nav>

      </header>
      <br>
      <main role="main">

        <div class="row-fluid">
	    <!--Edit Main Content Area here-->
	        <div class="span12" id="divMain" style="text-align:justify;">
	            <h1>Contacto</h1>
	            <hr>
              
              <div class="row">
                <div class="col-lg-6">

                  <!-- titulo acerca de -->
                  <p><strong class="text-error"><? echo $titulo ?></strong><br><br></p>
                  <ul id="contact-info">
                    <li>
                        <i class="fa fa-phone" style="font-size:20px"></i>
                        <span class="field">Teléfono:</span>
                        <br>
                        (+34) <? echo $telefono ?>
                    </li><br>
                    <li>
                        <i class="fa fa-envelope" style="font-size:20px"></i>
                        <span class="field">E-mail:</span>
                        <br>
                        <a href="mailto:<? echo $correo ?>" title="Email"><? echo $correo ?></a>
                    </li><br>
                    <li>
                        <i class="fa fa-home" style="font-size:24px"></i>
                        <span class="field">Dirección:</span>
                        <br>
                        <!-- Texto dirección -->
                        <? echo $direccion ?><br>
                        38000, Sta. Cruz de Tenerife<br>
                        Canarias, España.
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <br>
                  <div id="mostrarMapa" style="width: 510px; height: 300px;"></div>
                </div>
              </div>

	        </div><br>
	    </div>

        <nav class="breadcrumb" style="background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);
    border: 1px solid #e5e5e5;">
			<a class="breadcrumb-item" href="index.php?id=<? echo $id ?>" id='link-custom-breadcrumb'>/ Inicio</a>
			<span class="breadcrumb-item active" span style="color: rgb(40, 167, 69);">Contacto</span>
		</nav>
      </main>

      <!-- Site footer -->
      <footer class="footer">
      	<div class="row">
          <div class="col-lg-3">
          	<p>&copy; 2017 - <? echo $nombre ?>.</p>
          </div>
          <div class="col-lg-9">
			  <p class="text-right">Sigue a <? echo $nombre ?> en las redes sociales:
			  	<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
			  	<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter" style="font-size:24px"></i></a>
			  	<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube" style="font-size:24px"></i></a>
			  </p>
          </div>
        </div>
      </footer>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- Mapa Google -->
    <script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        // <![CDATA[
        $(function()
        {
            //Creamos el punto a partir de las coordenadas:
            var punto = new google.maps.LatLng(28.4872508, -16.2541866);
            //Configuramos las opciones indicando Zoom, punto(el que hemos creado) y tipo de mapa
            var myOptions = {
                zoom: 10, center: punto, mapTypeId: google.maps.MapTypeId.MAP
            };
            //Creamos el mapa e indicamos en que; caja queremos que se muestre
            var map = new google.maps.Map(document.getElementById("mostrarMapa"),  myOptions);
            //Opcionalmente podemos mostrar el marcador en el punto que hemos creado.
            var marker = new google.maps.Marker({
                position:punto,
                map: map,
                title:"La Empresa"});

            var popup = new google.maps.InfoWindow({
                content: 'www. La Empresa .com'});
            popup.open(map, marker);
        });
        // ]]>
    </script>
  </body>
</html>
