<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>S.G.I. GECKO - Instalación</title>
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
    <a class="navbar-brand" href="index.php">Instalación - S.G.I. GECKO</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">S.G.I. GECKO</a>
        </li>
        <li class="breadcrumb-item active">Instalación</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> Proceso de Instalación</div>

        <div class="card-body">
          <div style="margin-left:5%; margin-right:5%; text-align: justify;">
            
            <?php
                $servidor = "";
                $usuario = "";
                $pass = "";
                $bbdd = "";

                $servidor = $_REQUEST['servidor'];
                $usuario = $_REQUEST['usuario'];
                $pass = $_REQUEST['pass'];
                $bbdd = "gecko";


              // Notificar todos los errores excepto E_WARNING
              // Este es el valor predeterminado establecido en php.ini
              error_reporting(E_ALL ^ E_WARNING);

              //Comprobamos si existe la base de datos.
              echo "Procedemos a comprobar si existe la base de datos.<br>";
              $conn = new mysqli($servidor, $usuario, $pass, $bbdd);
                if($conn->connect_error){
                  echo "Procedemos a crear la base de datos.<br>";
                  $enlace = new mysqli($servidor, $usuario, $pass);
                if(!$enlace) {
                  echo "No pudo conectarse: " . $conn->connect_error;
                }
                //$sql = 'CREATE DATABASE prueba';
                $sql = 'CREATE DATABASE gecko CHARACTER SET utf8 COLLATE utf8_general_ci';
                if($enlace->query($sql)){
                    echo "La base de datos prueba se creo correctamente<br>";

                    //Conectamos con la base de datos.
                    $enlace = new mysqli($servidor, $usuario, $pass, $bbdd);

                  /* cambiar el conjunto de caracteres a utf8 - Permitimos acentos y las ñ*/
                  if (!$enlace->set_charset("utf8")) {
                      echo "Error cargando el conjunto de caracteres utf8: ".$enlace->error."<br>";
                  } else {
                      echo "Conjunto de caracteres actual: ".$enlace->character_set_name()."<br>";
                  }

                    // ------ Procedemos a crear las tablas.

                    /* Tabla imagen */
                    $sql = "CREATE TABLE IF NOT EXISTS `imagen` (
                            `IMG_id` int(11) NOT NULL AUTO_INCREMENT,
                            `IMG_destacada` tinyint(1) DEFAULT '0',
                            `IMG_descripcion` varchar(120) DEFAULT NULL,
                            `IMG_path` varchar(500) NOT NULL,
                            `IMG_id_INM` int(11) DEFAULT NULL,
                            `IMG_id_ORG` int(12) DEFAULT NULL,
                            PRIMARY KEY (`IMG_id`)
                          ) ENGINE=MyISAM AUTO_INCREMENT=1263 DEFAULT CHARSET=utf8;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Tabla imagen se creo correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    /* Tabla inmueble */
                    $sql = "CREATE TABLE IF NOT EXISTS `inmueble` (
                            `IMN_id` int(11) NOT NULL AUTO_INCREMENT,
                            `IMN_Titulo` varchar(50) NOT NULL,
                            `IMN_tipo` varchar(23) NOT NULL,
                            `IMN_referencia` varchar(50) NOT NULL,
                            `IMN_desc` varchar(700) NOT NULL,
                            `IMN_precio` double NOT NULL,
                            `IMN_habitaciones` int(1) DEFAULT NULL,
                            `IMN_banos` int(1) DEFAULT NULL,
                            `IMN_m2` int(11) NOT NULL,
                            `IMN_anoconstruccion` int(11) NOT NULL,
                            `IMN_certificadoener` varchar(5) DEFAULT NULL,
                            `IMN_venta` varchar(20) NOT NULL,
                            `IMN_dest` tinyint(1) NOT NULL,
                            `IMN_organizacion` int(11) NOT NULL,
                            PRIMARY KEY (`IMN_id`)
                          ) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Tabla inmueble se creo correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    /* Tabla organizacion */
                    $sql = "CREATE TABLE IF NOT EXISTS `organizacion` (
                            `ORG_id` int(11) NOT NULL AUTO_INCREMENT,
                            `ORG_nombre` varchar(50) NOT NULL,
                            `ORG_correo` varchar(50) NOT NULL,
                            `ORG_telefono` varchar(15) NOT NULL,
                            `ORG_direccion` varchar(180) NOT NULL,
                            `ORG_tipo` varchar(20) NOT NULL DEFAULT 'Inmobiliaria',
                            `ORG_acerca` varchar(700) NOT NULL,
                            `ORG_acerca2` varchar(700) DEFAULT NULL,
                            `ORG_acerca3` varchar(700) DEFAULT NULL,
                            `ORG_tituloacerca` varchar(100) NOT NULL,
                            `ORG_servicio1` varchar(700) NOT NULL,
                            `ORG_servicio2` varchar(700) DEFAULT NULL,
                            `ORG_servicio3` varchar(700) DEFAULT NULL,
                            PRIMARY KEY (`ORG_id`)
                          ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Tabla organizacion se creo correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    // ------ Indicamos los Índices.


                    // ------ Auto-Increment de las tablas.

                    $sql = "ALTER TABLE `imagen`
                          MODIFY `IMG_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Auto-Increment imagen insertado correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    $sql = "ALTER TABLE `inmueble`
                          MODIFY `IMN_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Auto-Increment inmueble insertado correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    $sql = "ALTER TABLE `organizacion`
                          MODIFY `ORG_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Auto-Increment organizacion insertado correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    // ------ Procedemos a insertar los datos.

                    $sql = "INSERT INTO `imagen` (`IMG_id`, `IMG_destacada`, `IMG_descripcion`, `IMG_path`, `IMG_id_INM`, `IMG_id_ORG`) VALUES
                      (27, 0, NULL, '../web/imagen/acerca.png', NULL, 2),
                      (26, 0, NULL, '../web/imagen/acerca.png', NULL, 1),
                      (1, 0, NULL, '../web/imagen/15-0vivienda1.png', 1, NULL),
                      (2, 0, NULL, '../web/imagen/15-1vivienda2.png', 1, NULL),
                      (3, 0, NULL, '../web/imagen/15-2vivienda3.png', 1, NULL),
                      (4, 1, 'Acogedor al mejor precio', '../web/imagen/dest15-3Destacada.png', 1, NULL),
                      (5, 0, NULL, '../web/imagen/16-0viviendas1.png', 2, NULL),
                      (6, 0, NULL, '../web/imagen/16-1viviendas2.png', 2, NULL),
                      (7, 1, 'La comodidad de la piscina en tu casa', '../web/imagen/dest16-2Destacada.png', 2, NULL),
                      (8, 0, NULL, '../web/imagen/17-0viviendas1.png', 3, NULL),
                      (9, 0, NULL, '../web/imagen/17-1viviendas2.png', 3, NULL),
                      (10, 0, NULL, '../web/imagen/17-2viviendas3.png', 3, NULL),
                      (11, 0, NULL, '../web/imagen/17-3viviendas4.png', 3, NULL),
                      (12, 0, NULL, '../web/imagen/18-0viviendas1.png', 4, NULL),
                      (13, 0, NULL, '../web/imagen/18-1viviendas2.png', 4, NULL),
                      (14, 1, 'En el centro de la ciudad', '../web/imagen/dest18-2destacada.png', 4, NULL),
                      (15, 0, NULL, '../web/imagen/19-0viviendas1.png', 5, NULL),
                      (16, 0, NULL, '../web/imagen/19-1viviendas2.png', 5, NULL),
                      (17, 0, NULL, '../web/imagen/19-2viviendas3.png', 5, NULL),
                      (18, 1, 'Moderna y fabulosa', '../web/imagen/dest19-3desta.png', 5, NULL),
                      (19, 0, NULL, '../web/imagen/20-0viviendas1.png', 6, NULL),
                      (20, 0, NULL, '../web/imagen/20-1viviendas2.png', 6, NULL),
                      (21, 0, NULL, '../web/imagen/20-2viviendas3.png', 6, NULL),
                      (22, 0, NULL, '../web/imagen/21-0viviendas1.png', 7, NULL),
                      (23, 0, NULL, '../web/imagen/21-1viviendas2.png', 7, NULL),
                      (24, 0, NULL, '../web/imagen/21-2viviendas3.png', 7, NULL),
                      (25, 1, 'Vista espectacular', '../web/imagen/dest21-3desta.png', 7, NULL);";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Datos de ejemplo de imagen insertados correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    $sql = "INSERT INTO `inmueble` (`IMN_id`, `IMN_Titulo`, `IMN_tipo`, `IMN_referencia`, `IMN_desc`, `IMN_precio`, `IMN_habitaciones`, `IMN_banos`, `IMN_m2`, `IMN_anoconstruccion`, `IMN_certificadoener`, `IMN_venta`, `IMN_dest`, `IMN_organizacion`) VALUES
                      (1, 'Piso en Calle Fray Pedro Balaguer', 'Piso', 'Balaguer17', 'Piso en el barrio de NUEVO ALTABIX, JUNTO A CORREOS. En urbanizacion cerrada con columpios y bancos. Cocina muy amplia y con madera de pino en toda la casa. Tarima flotante en el comedor y aire acondicionado art cool de LG (diseño). Pasillo decorado de forma rustica. Aseos totalmente reformados y con mamparas en ambos baños (bañera y plato de ducha). Ojos de buey en toda la casa y luces led en la cocina. Altillo en una de las habitaciones y armario empotrado en habitacion de matrimonio. INCLUYE VARIOS MUEBLES Y ELECTRODOMESTICOS. 80 m2 de piso y 7 m2 de terraza con toldo. ', 105000, 3, 2, 80, 2010, 'Venta', '', 0, 1),
                      (2, 'Chalet en Calle Italia', 'Adosado', 'ItaliaChalet', 'Se vende chalet de 250 m² construidos en parcela de 1200 m² con 5 habitaciones, 3 baños, cocina independiente, piscina de agua salada completamente reformada y garaje.', 449000, 6, 3, 250, 2010, 'Venta', '', 1, 1),
                      (3, 'Piso en Calle Monjas', 'Piso', 'Monjas2', 'Se vende bonito apartamento en Balmaseda completamente amueblado. Zona privilegiada. Consta de 1 habitacion, baño, salon con cocina americana y balcon, parcela de garage y trastero. Agua caliente y calefaccion individual y ascensor. Paseo de la Magdalena. Reciente construccion.', 129000, 1, 1, 80, 2010, 'Venta', '', 0, 1),
                      (4, 'Piso en Calle San Vicente', 'Piso', 'VicenteMar', 'Vivienda situada en el centro de la ciudad. Cerca de todos los servicios, colegios, centros de salud, zona de compras y ocio. Piso en 1ra. planta exterior de 65 m2 lineal distribuido en 2 habitaciones grandes, salon de 22m, baño y cocinas reformados recientemente, terraza y trastero. Calefaccion individual de gas. Buena accesibilidad en el portal, tiene servicio de porteria.', 143000, 2, 1, 68, 1980, 'Venta', '', 1, 1),
                      (5, 'Duplex en Ruta de la Plata ', 'Duplex', 'Plataruta', 'Atico-duplex de excelentes calidades, dos terrazas de 22m2 y 80m2, Residencial Solaria, urbanizacion MACONDO.', 310000, 4, 2, 140, 2000, 'Venta', '', 1, 1),
                      (6, 'Piso en Zumaburu', 'Piso', 'Zumaburu', 'Piso muy acogedor en Zumaburu, con reforma reciente antes tres habitaciones, ahora dos, con cocina americana con amplio salon y baño completo. El piso es todo exterior y se deja amueblado. Sin obras pendientes, con ascensor.', 210000, 2, 1, 67, 1990, 'Venta', '', 0, 1),
                      (7, 'Chalet en Urbanizacion Monterrey', 'Chalet', 'MonteChalt', 'OFERTA! Chalet, dos viviendas independientes en la misma propriedad, en venta un chalet impresionante. Muy atractivo en excelente condiciones y con magnificas vistas dentro la prestigiosa urbanizacion de Monterrey, a pocos minutos de Gandia y playa.', 580000, 7, 8, 2399, 2000, 'Venta', '', 1, 1);";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Datos de ejemplo de inmueble insertados correctamente<br>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }

                    $sql = "INSERT INTO `organizacion` (`ORG_id`, `ORG_nombre`, `ORG_correo`, `ORG_telefono`, `ORG_direccion`, `ORG_tipo`, `ORG_acerca`, `ORG_acerca2`, `ORG_acerca3`, `ORG_tituloacerca`, `ORG_servicio1`, `ORG_servicio2`, `ORG_servicio3`) VALUES
                      (1, 'S.G.I. GECKO', 'info@gecko.com', '922012012', 'Calle Venecia n13, 1Izq', 'Inmobiliaria', 'Bienvenido/a a nuestra pagina web. En ella podra encontrar una gran seleccion de inmuebles en venta y en alquiler dentro de la Comunidad Autonoma de Canarias. Nuestra cartera de productos esta en constante expansion y actualizacion. Si no encuentra el inmueble que busca entre nuestras ofertas no dude en comunicarnos sus preferencias y nosotros le encontraremos el producto que mejor se adapte a ellas.', 'Trabajamos con Promotoras, Bancos y Particulares para poder ofrecerle una variada oferta de villas, chalets, adosados, pisos, apartamentos, entre otros, de maxima calidad. Nuestro principal objetivo es lograr la satisfaccion de nuestros clientes.', 'GECKO nace de una larga trayectoria profesional en el sector inmobiliario. Le ofrecemos una atencion profesional integral en la que se tienen en cuenta todos los aspectos que influyen en una operacion inmobiliaria, Asesoramiento juridico, Busqueda de Inmuebles, Organizacion de Visitas, Servicio', 'S.G.I. GECKO. Expertos en el sector inmobiliario.', 'Prestamos servicios especializados en la compraventa de inmuebles en las mejores zonas de Canarias. Desarrollamos innovadoras estrategias de marketing tanto en el mercado nacional como internacional, construyendo una base solida de confianza con el cliente, cimentando nuestra relacion en la consecucian de los objetivos: la compra o venta de su propiedad.', 'Con nuestro sistema de trabajo ofrecemos un servicio integral, ayudando y asesorandole en todo el proceso que conlleva la compra venta de su propiedad. Nuestra trayectoria en el sector inmobiliario nos avala. Confie en nuestra profesionalidad y experiencia, y nuestro compromiso sera maximo con usted.', 'Venga a conocernos y le asesoramos personalmente sin ningun compromiso.'),
                      (2, 'Dingo Inmobiliaria', 'Dingo@dingo.com', '673032031', 'C/ Constitución 155, ', 'Inmobiliaria', 'Dingo se encarga de las mejores casas', 'Las casas mas baratas, y de buena calidad', 'Siempre que puedas pagarlas', 'La casa ideal al precio imposible', 'Nos encargamos de vender todo hasta los muebles', 'Mascotas ? no importa tambien se pueden vender', 'Tenemos las mejores comisiones de todas las inmobiliarias de la isla');";
                    if($enlace->query($sql) === TRUE){
                      $last_id = $enlace->insert_id;
                      echo "Datos de ejemplo de organizacion insertados correctamente<br>";
                      echo "<h2>La Base de Datos se ha creado correctamente.</h2>";
                    }else{
                      echo "Error: " . $sql . "<br>" . $enlace->error;
                    }
                }else{
                  echo "Error al crear la base de datos: " . $conn->connect_error;
                }
                }else{
                  echo "La base de datos ya existe.<br>";
                }
            ?>

          </div>
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
