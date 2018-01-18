<?php
  $id = $_GET["id"];
  $conexion=mysqli_connect("localhost","root","","gecko") or
      die("Problemas con la conexión");
  $registros=mysqli_query($conexion,"select ORG_nombre, ORG_tituloacerca, ORG_acerca, ORG_acerca2, ORG_acerca3
                          from organizacion where ORG_id = '$id'") or
    die("Problemas en el select:".mysqli_error($conexion));

  if ($reg=mysqli_fetch_array($registros)){
    $nombre = $reg['ORG_nombre'];
    $titulo = $reg['ORG_tituloacerca'];
    $parrafo1 = $reg['ORG_acerca'];
    $parrafo2 = $reg['ORG_acerca2'];
    $parrafo3 = $reg['ORG_acerca3'];
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
					<li class="nav-item active">
						<a class="nav-link" href="index.php?id=<? echo $id ?>"><span style="color: rgb(40, 167, 69);">Inicio</span> <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="empresa.php?id=<? echo $id ?>">La empresa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="servicios.php?id=<? echo $id ?>">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contacto.php?id=<? echo $id ?>">Contacto</a>
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

        <!-- Carousel -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/slider-carousel/1.jpg" alt="Foto 1.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slider-carousel/2.jpg" alt="Foto 2.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slider-carousel/3.jpg" alt="Foto 3.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slider-carousel/4.jpg" alt="Foto 4.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slider-carousel/5.jpg" alt="Foto 5.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slider-carousel/6.png" alt="Foto 6.">
						<div class="carousel-caption d-none d-md-block">
								<a class="btn btn btn-success" href="#">Lo quiero</a>
							<div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
								<p>Sueña con un lugar mejor.</p>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		<br>

		<!-- Cita o Slogan-->
        <center>
            <blockquote class="blockquote text-right">
			  <p class="mb-0" style="font-size: 18px">“Propiedad exclusiva, asesoramiento personal.”</p>
			  <footer class="blockquote-footer"><cite title="La Empresa">La empresa</cite></footer>
			</blockquote>
        </center>


        <h3>Últimos inmuebles añadidos.</h3>
        <hr>

        <br>

        <!-- Example row of columns -->
        <div class="row">
          <div class="col-lg-4">
          	<div class="card h-100">
		        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
		        <div class="card-body">
		          <h4 class="card-title">
		            <a href="#">Item Three</a>
		          </h4>
		          <h5>$24.99</h5>
		          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
		        </div>
		        <div class="card-footer">
		          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
		        </div>
		    </div>
          </div>
          <div class="col-lg-4">
          	<div class="card h-100">
		        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
		        <div class="card-body">
		          <h4 class="card-title">
		            <a href="#">Item Three</a>
		          </h4>
		          <h5>$24.99</h5>
		          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
		        </div>
		        <div class="card-footer">
		          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
		        </div>
		    </div>
          </div>
          <div class="col-lg-4">
          	<div class="card h-100">
		        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
		        <div class="card-body">
		          <h4 class="card-title">
		            <a href="#">Item Three</a>
		          </h4>
		          <h5>$24.99</h5>
		          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
		        </div>
		        <div class="card-footer">
		          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
		        </div>
		    </div>
          </div>
        </div>

        <br><br>

        <nav class="breadcrumb" style="background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);
    border: 1px solid #e5e5e5;">
			<span class="breadcrumb-item" style="color: black; background-color: transparent;"></span>
			<span class="breadcrumb-item active" span style="color: rgb(40, 167, 69);">Inicio</span>
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
  </body>
</html>
