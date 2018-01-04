
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
  $id="";
              
  $id=$_GET["id"];
  

  
  $sql = "Select * FROM inmueble WHERE IMN_id='$id'";



            $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $last_id = $conn->insert_id;
      echo "loaded INM record successfully. Last deleted ID is: " . $last_id;
         if ($result->num_rows > 0) {
                // output data of each row
                if($row = $result->fetch_assoc()) {
                    
                        $titulo = $row['IMN_Titulo'];
                        $tipo   = $row['IMN_tipo'];
                        $referencia  = $row['IMN_referencia'];
                        $descripcion  = $row['IMN_desc'];
                        $precio  = $row['IMN_precio'];
                        $habitaciones  = $row['IMN_habitaciones'];
                        $banos = $row['IMN_banos'];
                        $m2 = $row['IMN_m2'];
                        $ano =  $row['IMN_anoconstruccion'];
                        $certificado  = $row['IMN_certificadoener'];
                        $venta  = $row['IMN_venta'];
                }
         }
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  
	
	


  
if(isset($_POST['submit'])){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gecko";
 $id="";
              
  $id=$_GET["id"];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  
  $titulo = "";
  $tipo = "";
  $referencia = "";
  $descripcion = "";
  $precio = "";
  $habitaciones = "";
  $banos = "";
  $m2 = "";
  $ano = "";
  $certificado = "";
  $rebaja = "";
  $localizacion = "";
  $tlf = "";
  $venta = "";
  $organizacion = "1";
    
          
  
  $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
  $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';  
  $referencia = isset($_POST['referencia']) ? $_POST['referencia'] : '';
  $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
  $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
  $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : '';
  $banos = isset($_POST['banos']) ? $_POST['banos'] : '';
  $m2 = isset($_POST['m2']) ? $_POST['m2'] : '';
  $ano = isset($_POST['ano']) ? $_POST['ano'] : '';
  $certificado = isset($_POST['certificado']) ? $_POST['certificado'] : '';
  $venta  = isset($_POST['venta']) ? $_POST['venta'] : '';
  
  

       $sql = "UPDATE  inmueble SET  IMN_Titulo='$titulo',IMN_tipo='$tipo', IMN_referencia='$referencia', IMN_desc='$descripcion', IMN_precio='$precio', IMN_habitaciones='$habitaciones', IMN_banos='$banos', IMN_m2='$m2', IMN_anoconstruccion='$ano', IMN_certificadoener='$certificado', IMN_venta='$venta'WHERE IMN_id='$id'";

    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo " INM record UPDATED successfully. Last inserted ID is: " . $last_id;
      
      
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  
   
}
?>
<script>
function validateForm() {
    var x = document.forms["myForm"]["titulo"].value;
    if (x == "") {
        alert("titulo must be filled out");
        return false;
    }

    var y = document.forms["myForm"]["upload[]"].files.length;
    if (y ==0) {
        alert("Need at least 1 image");
        return false;
    }
}
function enabledest()
{
  
  var x = document.getElementById("destupload");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>S.G.I. GECKO - Demo</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Iconos de la W3C -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" onload="enabledest()">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Demo - S.G.I. GECKO</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Organizaciones">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Organizaciones</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="listar_organizaciones.php">Listar</a>
            </li>
            <li>
              <a href="agregar_organizaciones.php">Añadir</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inmuebles">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
            <i class="fa fa-home" style="font-size:20px"></i>
            <span class="nav-link-text">Inmuebles</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti2">
            <li>
              <a href="listar_inmuebles.php">Listar</a>
            </li>
            <li>
              <a href="agregar_inmuebles.php">Añadir</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">S.G.I. GECKO</a>
        </li>
        <li class="breadcrumb-item active">Modificar Inmueble</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> Modificar Inmueble</div>
        <div class="card-body">

        <!-- Agregar Contenido -->
        <form name="myForm" action="" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
          <div class="form-group">
              <label for="titulo">Titulo:</label>
                <input type="text" value="<?=$titulo?>"class="form-control" name="titulo" id="titulo">
          </div>
          <div class="form-group">
          <label for="tipo">Tipo Inmueble:</label>
          <select class="selectpicker" value="<?=$tipo?>" name="tipo"id="tipo"data-style="btn-warning">
            <option value="Adosado">Adosado</option>
            <option value="Apartamento">Apartamento</option>
            <option value="Piso">Piso</option>
            <option value="Chalet">Chalet</option>
            <option value="Duplex">Duplex</option>
            <option value="Finca">Finca</option>
            <option value="Garaje">Garaje</option>
            <option value="Local">Local</option>
            <option value="Terreno">Terreno</option>
          </select>
          </div>
          <div class="form-group">
              <label for="referencia">Referencia:</label>
                <input type="text" value="<?=$referencia?>"  class="form-control" name="referencia" id="referencia">
          </div>
          
          <div class="form-group">
              <label for="descripcion">Descripcion:</label>
                <input type="text" value="<?=$descripcion?>"  class="form-control" name="descripcion" id="descripcion">
          </div>
          
          <div class="form-group">
              <label for="precio">Precio:</label>
                <input type="number" value="<?=$precio?>" class="form-control" name="precio" id="precio">
          </div>
          <div class="form-group">
            <label for="habitaciones">Habitaciones:</label>
           
            <input type="number" value="<?=$habitaciones?>"class="form-control" name="habitaciones"  min="0" max="12" id="habitaciones">
          </div>
          <div class="form-group">
            <label for="banos">Baños:</label>
            <input type="number" value="<?=$banos?>"class="form-control" name="banos"  min="0" max="8" id="banos">
          </div>
          
          <div class="form-group">
            <label for="m2">M2:</label>
            <input type="number" value="<?=$m2?>"class="form-control" name="m2"  min="20" max="10000" id="m2">
          </div>
          <div class="form-group">
          <label for="ano">Año Construcción:</label>
          <select class="selectpicker"name="ano" value="<?=$ano?>"id="ano"data-style="btn-warning">
            <option value="2010">2010</option>
            <option value="2000">2000</option>
            <option value="1990">1990</option>
            <option value="1980">1980</option>
            <option value="1970">1970</option>
            <option value="1950">1960</option>
            <option value="1940">1950</option>
          </select>
          </div>
          <div class="form-group">
          <label for="certificado">Certificado Energetico:</label>
          <select class="selectpicker" value="<?=$certificado?>" name="certificado"id="certificado"data-style="btn-warning">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
          </select>
          </div> 
          
          <div class="form-group">
          <label for="certificado">Venta/Alquiler:</label>
          <select class="selectpicker" value="<?=$venta?>"name="certificado"id="certificado"data-style="btn-warning">
            <option value="Venta">Venta</option>
            <option value="Alquiler">Alquiler</option>
          </select>
          </div>
         
          
          <button type="submit" name="submit"  class="btn btn-primary">Enviar</button>
        </form>

      <!-- Fin Agregar Contenido -->
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>&copy; 2017 - S.G.I. GECKO.</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
