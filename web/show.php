


<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inmueble</title>

  
      
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/justified-nav.css" rel="stylesheet">

    <!-- CSS Propio -->
    <link href="dist/css/propio.css" rel="stylesheet">
  </head>
    
<body>



    
    
    
  <!-- Page Content -->
    <div class="container">

      <div class="row">

        
      

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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
                        
                    <a href="href="inmueble.php?id='. $row["IMN_id"].'"><img class="card-img-top" src="'. $row["IMG_path"].'" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        '. $row["IMN_Titulo"] .'
                      </h4>
                      <h5 style="text-align: right;">'. $row["IMN_precio"] .'€</h5>
                      <p class="card-text">'. $row["IMN_referencia"] .' <br>'. $row["IMN_venta"] .'<br> <center>'. $row["IMN_habitaciones"] .' Hab| '. $row["IMN_banos"] .' Baños| '. $row["IMN_m2"] .'m2 </center> </p>
                    </div>
                        <div class="card-footer"> 
                            <a href="inmueble.php?id='. $row["IMN_id"].'">
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
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container --> 
    
</body>
</html>
