<?php
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
 

  
  $sql = "INSERT INTO organizacion ( ORG_nombre, ORG_correo, ORG_telefono, ORG_direccion, ORG_tipo, ORG_acerca, ORG_acerca2, ORG_acerca3, ORG_tituloacerca, ORG_servicio1, ORG_servicio2, ORG_servicio3 ) VALUES ('$nombre','$correo','$telefono','$direccion','$tipo','$acerca','$acerca2','$acerca3','$tituloacerca','$servicio1','$servicio2','$servicio3')";

    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      #echo "New INM record created successfully. Last inserted ID is: " . $last_id;
      
      
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  
   
     if(count($_FILES['upload']['name']) > 0){
        
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][0];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
				
                $shortname = $_FILES['upload']['name'][0];

                //save the url and the file
				
					$filePath = "../web/imagen/" .$last_id.'-'.'0'.$shortname;

                $check = getimagesize($_FILES['upload']['tmp_name'][0]);
                //Upload the file into the temp dir
                if($check && move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
						$sqlIMG = "INSERT INTO imagen (IMG_path,IMG_id_ORG) VALUES ('$filePath','$last_id')";
							
							if ($conn->query($sqlIMG) === TRUE) {
								#echo "image added successfully.";
							} 
							else{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}

                }
              }
        }
    
}
?>
<script>
function validateForm() {
 
    var y = document.forms["myForm"]["upload[]"].files.length;
    if (y ==0) {
        alert("hace falta una imagen");
        return false;
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
    
  <style>
    
          .contact_form input, .contact_form textarea {
        padding-right:30px;
    }
        .contact_form input:focus:invalid, .contact_form textarea:focus:invalid { /* when a field is considered invalid by the browser */
        background: #fff url(images/invalid.png) no-repeat 98% center;
        box-shadow: 0 0 5px #d45252;
        border-color: #b03535
    }
    .contact_form input:required:valid, .contact_form textarea:required:valid { /* when a field is considered valid by the browser */
        background: #fff url(images/valid.png) no-repeat 98% center;
        box-shadow: 0 0 5px #5cd053;
        border-color: #28921f;
    }
    input:required, textarea:required {
        background: #fff url(images/red_asterisk.png) no-repeat 98% center;
    }
.contact_form input:required, .contact_form textarea:required {
	background: #fff url(images/red_asterisk.png) no-repeat 98% center;
}
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >
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
        <li class="breadcrumb-item active">Añadir Organización</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> Añadir Organización</div>
        <div class="card-body">

        <!-- Agregar Contenido -->
            
            

        <form class="contact_form" name="myForm" action="" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
          <div class="form-group">
              <label for="nombre">Nombre:</label>
                <input type="text"  required class="form-control" name="nombre" placeholder="Nombre de la Organizacion"id="nombre">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="correo">Correo:</label>
                <input type="email"  required class="form-control" name="correo"  placeholder="correo@ejemplo.com"  id="correo">
          </div>
            <div class="form-group">
              <label for="telefono">Telefono:</label>
                <input type="text"  required class="form-control" name="telefono"  placeholder="673032032" id="telefono">
          </div>
        <div class="form-group">
              <label for="direccion">Direccion:</label>
                <input type="text"  required class="form-control" name="direccion"  placeholder="Calle Ejemplo n1" id="direccion">
          </div>
                
          <div class="form-group">
              
          <label for="tipo">Tipo Organizacion: </label>
          <select class="selectpicker" name="tipo"id="tipo"data-style="btn-warning">
            <option value="Inmobiliaria">Inmobiliaria</option>
            <option value="Textil">Textil</option>
            <option value="Supermercado">Supermercado</option>
            <option value="Restaurantes">Restaurantes</option>
            <option value="Productos">Productos</option>
          </select>
          </div>
            <div class="form-group">
              <label for="direccion">Titulo:</label>
                <input type="text"  required class="form-control" name="tituloacerca" placeholder="Titulo para la pagina Acerca"id="tituloacerca">
          </div>
           <div class="form-group">
              <label for="direccion">Acerca :</label>
                <input type="textarea"  required class="form-control" name="acerca" placeholder="Primer parrafo acerca" id="acerca">
          </div>
            <div class="form-group">
              <label for="direccion">Acerca2 :</label>
                <input type="textarea" class="form-control" name="acerca2" placeholder="Segundo parrafo acerca"id="acerca2">
          </div>
            <div class="form-group">
              <label for="direccion">Acerca3 :</label>
                <input type="textarea" class="form-control" name="acerca3" placeholder="Tercer parrafo acerca" id="acerca3">
          </div>
        
           <div class="form-group">
              <label for="direccion">Servicio :</label>
                <input type="textarea"  required class="form-control" name="servicio1" placeholder="Primer parrafo Servicio" id="servicio1">
          </div>
            <div class="form-group">
              <label for="direccion">Servicio 2:</label>
                <input type="textarea" class="form-control" name="servicio2"placeholder="Segundo parrafo Servicio" id="servicio2">
          </div>
            <div class="form-group">
              <label for="direccion">Servicio 3 :</label>
                <input type="textarea" class="form-control" name="servicio3" placeholder="Tercer parrafo Servicio" id="servicio3">
          </div>
        
          <div class="form-group">
                <label for='upload'>Subir Imagen Acerca:</label>
                <input id='upload' name="upload[]" type="file" class="btn btn-primary"/>
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
