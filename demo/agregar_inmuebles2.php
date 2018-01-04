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
  
  $titulo = "";
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
  $referencia = isset($_POST['referencia']) ? $_POST['referencia'] : '';
  $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
  $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
  $habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : '';
  $banos = isset($_POST['banos']) ? $_POST['banos'] : '';
  $m2 = isset($_POST['m2']) ? $_POST['m2'] : '';
  $ano = isset($_POST['ano']) ? $_POST['ano'] : '';
  $certificado = isset($_POST['certificado']) ? $_POST['certificado'] : '';
  $rebaja = isset($_POST['rebaja']) ? $_POST['rebaja'] : '';
  $localizacion = isset($_POST['localizacion']) ? $_POST['localizacion'] : '';
  $tlf = isset($_POST['telefono']) ? $_POST['telefono'] : '';
  $venta = isset($_POST['venta']) ? '1' : '0';
  
  

  
  $sql = "INSERT INTO inmueble ( IMN_Titulo, IMN_referencia, IMN_desc, IMN_precio, IMN_habitaciones, IMN_banos, IMN_m2, IMN_anoconstruccion, IMN_certificadoener, IMN_rebaja, IMN_localizacion, IMN_tlf, IMN_venta, IMN_organizacion) VALUES ('$titulo','$referencia','$descripcion','$precio','$habitaciones','$banos','$m2','$ano','$certificado','$rebaja','$localizacion','$tlf','$venta','$organizacion')";

    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "New INM record created successfully. Last inserted ID is: " . $last_id;
      
      
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
        
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
        
          $filePath = "../web/imagen/" .$last_id.'-'.$i.$shortname;

                $check = getimagesize($_FILES['upload']['tmp_name'][$i]);
                //Upload the file into the temp dir
                if($check && move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
            $sqlIMG = "INSERT INTO imagen (IMG_path,IMG_id_INM) VALUES ('$filePath','$last_id')";
              
              if ($conn->query($sqlIMG) === TRUE) {
                echo "image added successfully.";
              } 
              else{
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
    if(count($_FILES['destaupload']['name']) > 0){
        
          //Get the temp file path
            $tmpFilePath = $_FILES['destaupload']['tmp_name'][0];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
        
                $shortname = $_FILES['destaupload']['name'][0];

                //save the url and the file
        
          $filePath = "../web/imagen/" .$last_id.'-'.'0'.$shortname;

                $check = getimagesize($_FILES['destaupload']['tmp_name'][0]);
                //Upload the file into the temp dir
                if($check && move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
            $sqlIMG = "INSERT INTO imagen (IMG_destacada,IMG_path,IMG_id_INM) VALUES (1,'$filePath','$last_id')";
              
              if ($conn->query($sqlIMG) === TRUE) {
                echo "image added successfully.";
              } 
              else{
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

                }
              }
        }
    

    //show success message
    echo "<h1>Uploaded Dest:</h1>";
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
        <li class="breadcrumb-item active">Añadir Inmueble</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> Añadir Inmueble</div>
        <div class="card-body">

        <!-- Agregar Contenido -->
        <form name="myForm" action="" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
          <div class="form-group">
              <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
          </div>
          <div class="form-group">
          <label for="tipo">Tipo Inmueble:</label>
          <select class="selectpicker" name="tipo"id="tipo"data-style="btn-warning">
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
                <input type="text" class="form-control" name="referencia" id="referencia">
          </div>
          
          <div class="form-group">
              <label for="descripcion">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion">
          </div>
          
          <div class="form-group">
              <label for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" id="precio">
          </div>
          <div class="form-group">
            <label for="habitaciones">Habitaciones:</label>
           
            <input type="number" class="form-control" name="habitaciones"  min="0" max="12" id="habitaciones">
          </div>
          <div class="form-group">
            <label for="banos">Baños:</label>
            <input type="number" class="form-control" name="banos"  min="0" max="8" id="banos">
          </div>
          
          <div class="form-group">
            <label for="m2">M2:</label>
            <input type="number" class="form-control" name="m2"  min="20" max="10000" id="m2">
          </div>
          <div class="form-group">
          <label for="ano">Año Construcción:</label>
          <select class="selectpicker"name="ano" id="ano"data-style="btn-warning">
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
          <select class="selectpicker" name="certificado"id="certificado"data-style="btn-warning">
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
                <label for='upload'>Subir Imagenes:</label>
                <input id='upload' name="upload[]" type="file" multiple="multiple" class="btn btn-primary"/>
            </div>
          <div class="form-group">
          <label for="certificado">Venta/Alquiler:</label>
          <select class="selectpicker" name="certificado"id="certificado"data-style="btn-warning">
            <option value="Venta">Venta</option>
            <option value="Alquiler">Alquiler</option>
          </select>
          </div>
          <div class="form-group">
            <div class="checkbox">
             <label><input type="checkbox"  onclick="enabledest()" name="destacada" value="">Destacada</label>
            </div>
            </div>
          <div id='destupload' class="form-group" ">
                <label for='destupload'>Subir Imagen Destacada:</label>
                <input  name="destupload" type="file" class="btn btn-primary"/>
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
