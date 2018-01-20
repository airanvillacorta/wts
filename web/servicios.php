<?php
  $id = $_GET["id"];
  $conexion=mysqli_connect("localhost","root","","gecko") or
      die("Problemas con la conexión");
  $registros=mysqli_query($conexion,"select ORG_nombre, ORG_tituloacerca, ORG_servicio1, ORG_servicio2, ORG_servicio3
                          from organizacion where ORG_id = '$id'") or
    die("Problemas en el select:".mysqli_error($conexion));

  if ($reg=mysqli_fetch_array($registros)){
    $nombre = $reg['ORG_nombre'];
    $titulo = $reg['ORG_tituloacerca'];
    $parrafo1 = $reg['ORG_servicio1'];
    $parrafo2 = $reg['ORG_servicio2'];
    $parrafo3 = $reg['ORG_servicio3'];
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
			<a class="navbar-brand" href="index.php?id=<?php echo $id ?>"><b><?php echo $nombre ?></b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php?id=<?php echo $id ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="empresa.php?id=<?php echo $id ?>">La empresa</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="servicios.php?id=<?php echo $id ?>"><span style="color: rgb(40, 167, 69);">Servicios</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contacto.php?id=<?php echo $id ?>">Contacto</a>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
                    
					
					<?php
                    echo'<a href="inmuebles.php?id='. $id.'">
                    
                    	<button class="btn btn-outline-success my-2 my-sm-0 active" type="submit">Inmuebles</button>
					</a>'; 
                    ?>
                   
					
				</div>
			</div>
		</nav>

      </header>
      <br>
      <main role="main">

        <div class="row-fluid">
	    <!--Edit Main Content Area here-->
	        <div class="span12" id="divMain" style="text-align:justify;">
	            <h1>Servicios</h1>
	            <hr>
              <!-- titulo acerca de -->
	            <p><strong class="text-error"><? echo $titulo ?></strong><br><br></p>

               <!-- Parrafo 1, acerca de -->
              <p><?php echo $parrafo1 ?></p>
              <!-- Parrafo 2, acerca de -->
              <p><?php echo $parrafo2 ?></p>
              <!-- Parrafo 3, acerca de -->
              <p><?php echo $parrafo3 ?></p>
              <br>

              <center>
                <img src="img/servicios/img2.jpg" alt="Encuentra tu casa" style="border-radius: 5%">
                <img src="img/servicios/img1.jpg" alt="Cerramos el acuerdo" style="border-radius: 5%">
                <img src="img/servicios/img3.jpg" alt="Te entregamos tu casa" style="border-radius: 5%">
              </center>
	        </div><br><br>
	    </div>

        <nav class="breadcrumb" style="background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);
    border: 1px solid #e5e5e5;">
			<a class="breadcrumb-item" href="index.php?id=<?php echo $id ?>" id='link-custom-breadcrumb'>/ Inicio</a>
			<span class="breadcrumb-item active" span style="color: rgb(40, 167, 69);">Servicios</span>
		</nav>
      </main>

       <!-- Site footer -->
      <footer class="footer">
      	<div class="row">
          <div class="col-lg-3">
          	<p>&copy; 2017 - <?php echo $nombre ?>.</p>
          </div>
          <div class="col-lg-9">
			  <p class="text-right">Sigue a <?php echo $nombre ?> en las redes sociales:
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
  </body>
</html>
