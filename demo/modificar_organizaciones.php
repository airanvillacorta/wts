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
  

  
  $sql = "Select * FROM organizacion WHERE ORG_id='$id'";



    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $last_id = $conn->insert_id;
      #echo "loaded INM record successfully. Last deleted ID is: " . $last_id;
         if ($result->num_rows > 0) {
                // output data of each row
                if($row = $result->fetch_assoc()) {
                    
                     
                    $nombre= $row['ORG_nombre'];
                    $correo = $row['ORG_correo'];
                    $telefono = $row['ORG_telefono'];
                    $direccion= $row['ORG_direccion'];
                    $tipo= $row['ORG_tipo'];
                    $acerca = $row['ORG_acerca'];
                    $acerca2= $row['ORG_acerca2'];
                    $acerca3= $row['ORG_acerca3'];
                    $tituloacerca= $row['ORG_tituloacerca'];
                    $servicio1= $row['ORG_servicio1'];
                    $servicio2= $row['ORG_servicio2'];
                    $servicio3= $row['ORG_servicio3'];
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
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    
    $nombre = "";
    $correo = "";
    $telefono = "";
    $direccion= "";
    $tipo= "";
    $acerca = "";
    $acerca2= "";
    $acerca3= "";
    $tituloacerca= "";
    $servicio1= "";
    $servicio2= "";
    $servicio3= "";
      
    $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $telefono= isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $direccion= isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $tipo= isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $acerca = isset($_POST['acerca']) ? $_POST['acerca'] : '';
    $acerca2= isset($_POST['acerca2']) ? $_POST['acerca2'] : '';
    $acerca3= isset($_POST['acerca3']) ? $_POST['acerca3'] : '';
    $tituloacerca= isset($_POST['tituloacerca']) ? $_POST['tituloacerca'] : '';
    $servicio1= isset($_POST['servicio1']) ? $_POST['servicio1'] : '';
    $servicio2= isset($_POST['servicio2']) ? $_POST['servicio2'] : '';
    $servicio3= isset($_POST['servicio3']) ? $_POST['servicio3'] : '';
 


    
     $sql = "UPDATE  organizacion SET  ORG_nombre='$nombre',ORG_correo='$correo', ORG_telefono='$telefono', ORG_direccion='$direccion', ORG_tipo='$tipo', ORG_acerca='$acerca', ORG_acerca2='$acerca2', ORG_acerca3='$acerca3', ORG_tituloacerca='$tituloacerca', ORG_servicio1='$servicio1' ,ORG_servicio2='$servicio2', ORG_servicio3='$servicio3'WHERE ORG_id='$id'";
  if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      #echo " INM record UPDATED successfully. Last inserted ID is: " . $last_id;
      
      
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
        <li class="breadcrumb-item active">Modificar Organización</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> Añadir Organización</div>
        <div class="card-body">

        <!-- Agregar Contenido -->
            
            

        <form name="myForm" action="" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
          <div class="form-group">
              <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre"value="<?=$nombre?>" id="nombre">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="correo">Correo:</label>
                <input type="text" class="form-control" name="correo" value="<?=$correo?>"id="correo">
          </div>
            <div class="form-group">
              <label for="telefono">Telefono:</label>
                <input type="text" class="form-control" name="telefono"value="<?=$telefono?>" id="telefono">
          </div>
        <div class="form-group">
              <label for="direccion">Direccion:</label>
                <input type="text"value="<?=$direccion?>" class="form-control" name="direccion" id="direccion">
          </div>
                
          <div class="form-group">
              
          <label for="tipo">Tipo Organizacion:</label>
          <select class="selectpicker" name="tipo"value="<?=$tipo?>"id="tipo"data-style="btn-warning">
            <option value="Inmobiliaria">Inmobiliaria</option>
            <option value="Textil">Textil</option>
            <option value="Supermercado">Supermercado</option>
            <option value="Restaurantes">Restaurantes</option>
            <option value="Productos">Productos</option>
          </select>
          </div>
            <div class="form-group">
              <label for="direccion">Titulo:</label>
                <input type="text" class="form-control" name="tituloacerca" value="<?=$tituloacerca?>"id="tituloacerca">
          </div>
           <div class="form-group">
              <label for="direccion">Acerca :</label>
                <input type="textarea" value="<?=$acerca?>"class="form-control" name="acerca" id="acerca">
          </div>
            <div class="form-group">
              <label for="direccion">Acerca2 :</label>
                <input type="textarea" class="form-control" value="<?=$acerca2?>"name="acerca2" id="acerca2">
          </div>
            <div class="form-group">
              <label for="direccion">Acerca3 :</label>
                <input type="textarea" class="form-control" value="<?=$acerca3?>"name="acerca3" id="acerca3">
          </div>
        
           <div class="form-group">
              <label for="direccion">Servicio :</label>
                <input type="textarea" class="form-control" value="<?=$servicio1?>"name="servicio1" id="servicio1">
          </div>
            <div class="form-group">
              <label for="direccion">Servicio 2:</label>
                <input type="textarea" class="form-control" value="<?=$servicio2?>"name="servicio2" id="servicio2">
          </div>
            <div class="form-group">
              <label for="direccion">Servicio 3 :</label>
                <input type="textarea" value="<?=$servicio3?>" class="form-control" name="servicio3" id="servicio3">
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
