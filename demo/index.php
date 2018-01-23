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
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class=""></i> ¿Qué es GECKO?</div>

        <div class="card-body">
          <div style="margin-left:5%; margin-right:5%; text-align: justify;">
            <p>
              <b>GECKO es una plataforma que permite a cualquier organización tener una presencia en internet, sin necesidad de tener conocimientos informáticos, tan solo deberá de seguir el tutorial indicado a continuación para que quede todo correctamente instalado.</b><br><br>

              <b>La presencia incluye:</b><br><br>

              <ul>
              1. Una página principal con imágenes en formato sliders de los productos destacados, también se incluyen los tres últimos productos añadidos y un eslogan comercial.<br><br>

              2. Un apartado de la empresa, dónde se podrá indicar unos textos definiendola y destacando el sector al que se dirige.<br><br>

              3. Un apartado de servicios, dónde se podrá indicar los servicios que ofrece la organización.<br><br>

              4. Un apartado de contacto, dónde se podrá indicar toda la información de contacto de la organización.<br><br>

              5. También se dispone de un apartado del producto, éste vendra definido según el sector al que se dedique la organización. En este apartado, la organización podrá incluir los productos que desee vender a los visitantes de su negocio de una manera clara y sencilla, la idea es que la aplicación que gestiona los articulos se adapte al sector en el que la organización opera.<br><br>
              <i>Actualmente solo se dispone de la aplicación que gestiona Inmuebles <b>(En proximas versiones se incluirán muchas más)</b></i>.
            </ul>
            </p>
          </div>
        </div>


        <div class="card-header">
          <i class=""></i> Instalación y Configuración de la Plataforma: </div>

        <div class="card-body">
          <center><h2>¿Cómo usamos la aplicación?.</h2></center>
          <div style="margin-left:5%; margin-right:5%; margin-top: 5%; text-align: justify;">
            <p>
              <b>Descarga e instalación de la plataforma.</b><br><br>

              La siguiente información muestra como debemos descargar e instalar la aplicación en nuestro servidor para que quede totalmente operativo y asi poder a posteriori configurarlo.<br><br>

              <ul>
              1. Descargamos el proyecto a través del siguiente enlace: <a href="https://github.com/airanvillacorta/wts" target="_blank">Pincha aqui</a>.<br><br>

              2. Una vez descargado, debemos descomprimir la carpeta y subirla al servidor (Mostraremos un ejemplo en local usando la plataforma XAMPP, es un entorno de desarrollo que contiene Apache + MySQL + PHP, tecnologías que son necesarias para el correcto funcionamiento de la plataforma, la podrá descargar a través del siguiente enlace <a href="https://www.apachefriends.org/es/index.html" target="_blank">Pincha aqui</a>).<br><br>

              <b>Todos los pasos indicados a continuación son en modo local, si estás configurando un servidor online, tan solo debes copiar la carpeta en el directorio principal y saltar al paso 4, dónde deberas introducir los datos que te proporcionará tu proveedor del hosting. (dirección del servidor, nombre de usuario de MySQL, contraseña de MySQL).</b><br><br>

              3. Una vez el entorno de desarrollo este activado (Php + MySQL) y la carpeta del proyecto en el directorio principal (xamppfiles/htdocs/Proyecto), abrimos el navegador he introducimos la siguiente url (localhost/Proyecto/install).<br><br>

              4. Se nos abrirá una página de instalación de la plataforma, dónde debemos indicar en "dirección del servidor" en nuestro caso ponemos "localhost", el "usuario" dónde pondremos "root" y la "contraseña" dónde lo dejaremos vacio.<br><br>

              5. El paso anterior provocará que se cree la base de datos necesaria para poder usar la plataforma, también incluirá una sección de demostración llamada "demo", en ella podremos ver una organización a modo de ejemplo.<br><br>

              6. Una vez concluida la instalación, podremos acceder a la plataforma, insertando en el navegador la siguente url (localhost/Proyecto).<br><br>

              <b>Ya estamos lístos para poder usarla. No te pierdas a continuación la sección de configuración, dónde se muestra como podemos usarla.</b><br><br>
            </ul>
            </p>

            <p>
              <b>Configuración y Uso de la plataforma.</b><br><br>

              La siguiente información muestra como debemos configurar la plataforma para poder usarla y cómo podemos visualizar la demo.<br><br>

              <ul>
              1. Una vez instalada, accedemos a la siguiente url (localhost/Proyecto).<br><br>

              2. Tal y como indicamos en la descripción del proyecto, actualmente solo disponemos de la aplicación de gestión de inmuebles y es por ello que vemos la página principal con motivos de inmuebles. Ahora tan solo debemos hacer clic sobre "Ver Demo". En el pie de la página podemos ver información a cerca de los desarrolladores y un acceso a la plataforma.<br><br>

              3. Tras haber pulsado, accedemos al panel de gestión, en ella podemos encontrar en la ventana principal información a cerca del proyecto, un tutorial de instalación, un tutorial de configuración y unos tips dónde se indican el porque es necesario que una organización tenga presencia en internet.<br><br>

              4. En el panel de la izquierda podemos encontrar el menu principal dónde encontramos los siguientes elementos: "Organizaciones" e "Inmuebles".<br><br>

              4.1 <b>Organizaciones:</b><br><br>

              4.1.1 <b>Listar</b>, en este apartado podemos listar las organizaciones que se encuentran en la base de datos actualmente, la primera vez que accedemos podemos visualizar la de ejemplo. Como podemos observar, podemos filtrar las organizaciones o hacer búsquedas sobre ellas, con el objetivo de poder agilizar cuando hay una cantidad grande de información. En el apartado de Opciones: podemos modificar la organización en cuestion, podemos eliminarla o visualizarla (Esta última opción es la que muestra tal y como nos verán los usuarios que accedan a nuestra plafatorma).<br><br>

              4.1.2 <b>Añadir</b>, en este apartado podemos añadir organizaciones a la base de datos, a través de esta opción es dónde añadiremos la organización que deseamos configurar. Debemos indicar los datos de la organización, el tipo (Actualmente solo se encuentra disponible el de Inmuebles), Un título (éste hará de cabecera en las secciones de "la empresa" y "servicios"), unos parrafos hablando sobre la organización (acerca), unos parrafos hablando sobre los servicios que ofrece (servicio), tambien se deberá subir una imágen representativa de la organización.<br><br>

              4.2 <b>Inmuebles:</b><br><br>

              4.2.1 <b>Listar</b>, ahora deberemos seleccionar la organización de la cual deseamos listar los inmuebles, una vez seleccionado pulsamos listar y se mostrarán las que se encuentran en la base de datos actualmente. Como podemos observar, podemos filtrar los inmuebles o hacer búsquedas sobre ellas, con el objetivo de poder agilizar cuando hay una cantidad grande de información. En el apartado de Opciones: podemos modificar el inmueble en cuestion, podemos eliminarla o visualizarla (Esta última opción es la que muestra tal y como nos verán los usuarios que accedan a nuestra plafatorma). Tambien podemos volver al paso anterior para poder seleccionar otra organización siempre que se de el caso.<br><br>

              4.2.2 <b>Añadir</b>, en este apartado podemos añadir inmuebles de una organización determinada a la base de datos. Debemos indicar en primer lugar la organización a la cual pertenece el inmueble a añadir, luego insertaremos el titulo que deseamos que aparezca en la cabecera del inmueble, los datos del inmueble en cuestion, junto con su referencia y precio, (una vez introducidos el precio y la referencia, la aplicación de manera automática mostrará en la visualización el precio del m2), tambien deberemos indicar el certificado energético, si es de tipo: venta/alquiler, y se deberán subir las imágenes del inmueble, para ello podemos hacerlo de dos formas totalmente distintas (podemos seleccionarlas y arrastrarlas hacia la sección de seleccionar archivos o podemos usar el botón de seleccionar archivos para escogerlos, si usamos esta última opción y deseamos seleccionar mas de una imágen, tan solo debemos mantener presionados el botón "Alt" para hacerlo). Tambien podemos indicar si el inmueble en cuestión es uno de tipo destacado, esto hará que se muestre en el slider, si indicamos esta opción se deberá indicar un descripción que será mostrada en la página principal y una imágen con las medidas mostradas en esa sección.<br><br>

              <b>Una vez concluida la configuración ya podemos hacer uso completo de la plataforma. Esperamos sea de su agrado y para cualquier incidencia puede ponerse en contacto con los desarrolladores a través de los siguientes correos electrónicos: plasenciajohan@hotmail.com - avilbet@gmail.com.</b><br><br>
            </ul>
            </p>
          </div>
        </div>

        <div class="card-header">
          <i class=""></i> "Ten presencia en Internet"</div>

        <div class="card-body">
          <center><h2>8 razones para tener presencia en Internet.</h2></center>
          <div style="margin-left:5%; margin-right:5%; margin-top: 5%; text-align: justify;">
            <p>
              <b>La famosa compañia Ylos.com, ha indicado las 8 razones por las cuales es importante tener en los tiempos actuales presencia en Internet. Es por ello que queremos destacar su estudio dónde recuerda las ventajas que cualquier directivo, responsable de marketing o comercial, debe tener en cuenta para no prescindir de este servicio.</b><br><br>

              La importancia de tener una página web es indiscutible, sin embargo, para optimizar al 100% este medio es importante que se cumplan con una serie de objetivos, como ofrecer servicios concretos, acercarse e interactuar con el cliente o encontrar nuevos o mejorar la producción y el funcionamiento general de la empresa.<br><br>

              <ul>
              1. Apreciación del consumidor: la interactividad de Internet permite crear una gran afinidad y complicidad con los visitantes de la web, imposible por otros medios.<br><br>

              2. Mejora en la comunicación de las organizaciones: la automatización actual permite llegar con mensajes precisos y adecuados en función del nivel profesional o el interés puntual de la audiencia.<br><br>

              3. Respuesta instantánea: la transferencia de información en tiempo real puede aplicarse a cualquier departamento. Ante una propuesta, el cliente reaccionará con pedidos, comentarios u otro tipo de acciones que servirán para evaluar si los servicios se adecuan a sus necesidades y expectativas.<br><br>

              4. Incremento de los clientes potenciales: en función del producto, recursos u objetivos de la empresa, éstos pueden ser tan globales o segmentados como sea necesario.<br><br>

              5. Disminución de costes: gracias a la automatización, se reducen los gastos de todo el proceso, traduciéndose en ahorros muy importantes para la empresa y el consumidor.<br><br>

              6. Mejora de la productividad: es el resultado de la implantación de Internet en los procedimientos de la mayoría de las organizaciones. Mejora así el control y la descentralización de los procesos, la disponibilidad de los recursos humanos, y el acceso y gestión de la información desde cualquier lugar.<br><br>

              7. Nuevos mercados y nuevos consumidores: la apertura generalizada es el efecto de la exposición de los productos de la empresa en Internet; "hay que prever la forma de satisfacer la demanda de estos clientes y canalizarla adecuadamente", como indica Josep García, director de Ylos.com.<br><br>

              8. Oportunidades de negocio: la interacción con los clientes pondrá al descubierto nuevas ideas, posibilitando un desarrollo más ágil y la evolución hacia nuevas líneas de productos, en fases tempranas del desarrollo.
            </ul>
            </p>
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
