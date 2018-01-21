   
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
			<a class="navbar-brand" href="index.php?id=<?php echo $id ?>"><b><?php echo $nombre ?></b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.php?id=<?php echo $id ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="empresa.php?id=<?php echo $id ?>">La empresa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="servicios.php?id=<?php echo $id ?>">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contacto.php?id=<?php echo $id ?>">Contacto</a>
					</li>
				</ul>
				<div class="form-inline my-2 my-lg-0">
					<a href="inmuebles.php?id=<?php echo $id ?>">
						<button class="btn btn-outline-success my-2 my-sm-0 active" type="submit">Inmuebles</button>
					</a>
				</div>
			</div>
		</nav>

      </header>
      <br>
      <main role="main">
           <div class="span12" id="divMain" style="text-align:justify;">
	        
<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gecko"; 
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        
         

 
            $sql = "SELECT IMG_path,IMG_id_INM,IMG_destacada,IMG_descripcion FROM  imagen,inmueble WHERE IMG_destacada=1 AND IMN_id=IMG_id_INM AND IMN_organizacion ='$id' GROUP BY IMG_id_INM  ORDER BY IMG_id_INM ASC LIMIT 6";
            $result = $conn->query($sql);

           
                    
                
            
            ?> 
        <!-- Carousel -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					    <?php 
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        
                        if($i==0){
                            
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>';
                        }
                        else{
                        echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                        }
                        
                    }
                    
                    ?>
				</ol>
				<div class="carousel-inner">
                    
                    
        
                    	    <?php 
                     if ($result->num_rows > 0) {
                        for ($i = 0; $i < $result->num_rows; $i++) {
                            $row = $result->fetch_assoc();
                            if($i==0){

                            echo '	<div class="carousel-item active">
                            <img class="d-block w-100" src="'. $row["IMG_path"].'" alt="Foto 1.">
                            <div class="carousel-caption d-none d-md-block">
                                    <a class="btn btn btn-success"  href="inmueble.php?id='.$id.'&in='. $row["IMG_id_INM"].'">Ver Inmueble</a>
                                <div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
                                    <p>'. $row["IMG_descripcion"] .'</p>
                                </div>
                            </div>
                        </div>';
                            }
                            else{
                            echo '<div class="carousel-item">
                            <img class="d-block w-100" src="'. $row["IMG_path"].'" alt="Foto 2.">
                            <div class="carousel-caption d-none d-md-block">
                                    <a class="btn btn btn-success" href="inmueble.php?id='.$id.'&in='. $row["IMG_id_INM"].'">Ver Inmueble</a>
                                <div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 1%;">
                                    <p>'. $row["IMG_descripcion"] .'</p>
                                </div>
                            </div>
                        </div>';
                            }

                        }
                         
                     echo '    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
        </div> ';
                     }
                    else {
                        
                        

                        echo '<h3>Esta Organizacion no tiene Inmuebles destacados</h3>';
                    }
                    
                    
                    
                    
                    
                    ?>
                </div>
		<br>

		<!-- Cita o Slogan-->
        <center>
            <blockquote class="blockquote text-right">
			  <p class="mb-0" style="font-size: 18px">“Propiedad exclusiva, asesoramiento personal.”</p>
			  <footer class="blockquote-footer"><cite title="La Empresa">La empresa</cite></footer>
			</blockquote>
        </center>


    <h1>Inmuebles de <?php echo $nombre; ?></h1>
        <hr>

        <br>
          
         
        <!-- Example row of columns -->
        <div class="row">
            
            <?php
            $id = $_GET["id"];
              
              
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gecko"; 
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

              
            

              
            $sql = "SELECT IMN_id,IMN_Titulo, IMN_referencia,IMN_precio,IMN_habitaciones,IMN_habitaciones,IMN_banos,IMN_m2,IMN_venta, IMG_path FROM inmueble, imagen WHERE IMN_id=IMG_id_INM AND IMN_organizacion ='$id' GROUP BY IMN_id";
              
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    
                    echo'<div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        
                    <a href="inmueble.php?id='.$id.'&in='. $row["IMN_id"].'"><img class="card-img-top" src="'. $row["IMG_path"].'" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        '. $row["IMN_Titulo"] .'
                      </h4>
                      <h5 style="text-align: right;">'. $row["IMN_precio"] .'€</h5>
                      <p class="card-text">'. $row["IMN_referencia"] .' <br>'. $row["IMN_venta"] .'<br> <center>'. $row["IMN_habitaciones"] .' Hab| '. $row["IMN_banos"] .' Baños| '. $row["IMN_m2"] .'m2 </center> </p>
                    </div>
                        <div class="card-footer"> 
                            <a href="inmueble.php?id='.$id.'&in='. $row["IMN_id"].'">
                            <button type="button" class="btn btn-success">Ver Inmueble</button></a>
                        </div>
                    </div>
                </div>';
                }
            } else {
                echo "Esta organizacion no tiene inmuebles publicados";
            }

            $conn->close();
            ?> 
     
        </div>

        <br><br>

        
        <nav class="breadcrumb" style="background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);
    border: 1px solid #e5e5e5;">
			<a class="breadcrumb-item"  href="index.php?id=<?php echo $id ?>" id='link-custom-breadcrumb'>/ Inicio</a>
			<span class="breadcrumb-item active" span style="color: rgb(40, 167, 69);">Inmuebles</span>
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


