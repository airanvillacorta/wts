<?php
  $id = $_GET["id"];
?>

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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
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
        <li class="breadcrumb-item active">Inmuebles</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Inmuebles de Ejemplo</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Título</th>
                  <th>Tipo</th>
                  <th>Referencia</th>
                  <th>Operación</th>
                  <th>Precio</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>id</th>
                  <th>Título</th>
                  <th>Tipo</th>
                  <th>Referencia</th>
                  <th>Operación</th>
                  <th>Precio</th>
                  <th>Opciones</th>
                </tr>
              </tfoot>
              <tbody>
              	<?php
        					$conexion=mysqli_connect("localhost","root","","gecko") or
        					    die("Problemas con la conexión");
        					$registros=mysqli_query($conexion,"select IMN_id, IMN_titulo, IMN_tipo, IMN_referencia, IMN_venta, IMN_precio, IMN_organizacion
        					                        from inmueble where IMN_organizacion = '$id'") or
        					  die("Problemas en el select:".mysqli_error($conexion));
        					while ($reg=mysqli_fetch_array($registros))
        					{
        					  echo "<tr>";
        					  	echo "<td>".$reg['IMN_id']."</td>";
        					  	echo "<td>".$reg['IMN_titulo']."</td>";
        					  	echo "<td>".$reg['IMN_tipo']."</td>";
                      echo "<td>".$reg['IMN_referencia']."</td>";
                      echo "<td>".$reg['IMN_venta']."</td>";
                      echo "<td>".$reg['IMN_precio']."</td>";
        					  	echo "<td style='text-align: center;'>	
    			                  	<a href='modificar_inmuebles.php?org=".$reg['IMN_organizacion']."&id=".$reg['IMN_id']."'><i class='fa fa-gear'></i></a>
    			                  	<a href='eliminar_inmuebles.php?org=".$reg['IMN_organizacion']."&id=".$reg['IMN_id']."'><i class='fa fa-trash-o'></i></a>
                              <a href='../web/inmueble.php?id=".$reg['IMN_organizacion']."&in=".$reg['IMN_id']."'' target='_blank'><i class='fa fa-eye'></i></a>
    			                  	<!--<a href=''><i class='fa fa-save'></i></a>-->
    			                  </td>";
        					  echo "</tr>";
        					}
                  
                  
        					mysqli_close($conexion);
        				?>
              </tbody>
            </table>
            <center>
              <a href="listar_inmuebles.php">
                <button type="submit" name="submit" class="btn btn-primary">Volver</button>
              </a>
            </center>
          </div>
        </div>
        <!-- Indicamos ultima actualización de la base de datos de organizaciones -->
        <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
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
