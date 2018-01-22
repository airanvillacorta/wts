##¿Qué es GECKO?

**GECKO es una plataforma que permite a cualquier organización tener una presencia en internet, sin necesidad de tener conocimientos informáticos, tan solo deberá de seguir el tutorial indicado a continuación para que quede todo correctamente instalado.**

La presencia incluye:

  * Una página principal con imágenes en formato sliders de los productos destacados, también se incluyen los tres últimos productos añadidos y un eslogan comercial.

  * Un apartado de la empresa, dónde se podrá indicar unos textos definiendola y destacando el sector al que se dirige.

  * Un apartado de servicios, dónde se podrá indicar los servicios que ofrece la organización.

  * Un apartado de contacto, dónde se podrá indicar toda la información de contacto de la organización.

  * También se dispone de un apartado del producto, éste vendra definido según el sector al que se dedique la organización. En este apartado, la organización podrá incluir los productos que desee vender a los visitantes de su negocio de una manera clara y sencilla, la idea es que la aplicación que gestiona los articulos se adapte al sector en el que la organización opera.

Actualmente solo se dispone de la aplicación que gestiona Inmuebles (En proximas versiones se incluirán muchas más).

**Se puede ver una demo del proyecto en la web: https://gestioninmueblesgecko.000webhostapp.com/**



##Instalación y Configuración de la Plataforma:

###Descarga e instalación de la plataforma.

La siguiente información muestra como debemos descargar e instalar la aplicación en nuestro servidor para que quede totalmente operativo y asi poder a posteriori configurarlo.

* Descargamos el proyecto a través del código disponible en GitHub: https://github.com/airanvillacorta/wts.

* Una vez descargado, debemos descomprimir la carpeta y subirla al servidor (Mostraremos un ejemplo en local usando la plataforma XAMPP, es un entorno de desarrollo que contiene Apache + MySQL + PHP, tecnologías que son necesarias para el correcto funcionamiento de la plataforma, la podrá descargar a través de la página del proyecto: www.xampp.com). Todos los pasos indicados a continuación son en modo local, si estás configurando un servidor online, tan solo debes copiar la carpeta en el directorio principal y saltar al paso 4, dónde deberas introducir los datos que te proporcionará tu proveedor del hosting. (dirección del servidor, nombre de usuario de MySQL, contraseña de MySQL).

* Una vez el entorno de desarrollo este activado (Php + MySQL) y la carpeta del proyecto en el directorio principal (xamppfiles/htdocs/Proyecto), abrimos el navegador he introducimos la siguiente url (localhost/Proyecto/install).

* Se nos abrirá una página de instalación de la plataforma, dónde debemos indicar en "dirección del servidor" en nuestro caso ponemos "localhost", el "usuario" dónde pondremos "root" y la "contraseña" dónde lo dejaremos vacio.

* El paso anterior provocará que se cree la base de datos necesaria para poder usar la plataforma, también incluirá una sección de demostración llamada "demo", en ella podremos ver una organización a modo de ejemplo.

* Una vez concluida la instalación, podremos acceder a la plataforma, insertando en el navegador la siguente url (localhost/Proyecto).

Ya estamos lístos para poder usarla. No te pierdas a continuación la sección de configuración, dónde se muestra como podemos usarla.


###Configuración y Uso de la plataforma.

La siguiente información muestra como debemos configurar la plataforma para poder usarla y cómo podemos visualizar la demo.

* Una vez instalada, accedemos a la siguiente url (localhost/Proyecto).

* Tal y como indicamos en la descripción del proyecto, actualmente solo disponemos de la aplicación de gestión de inmuebles y es por ello que vemos la página principal con motivos de inmuebles. Ahora tan solo debemos hacer clic sobre "Ver Demo". En el pie de la página podemos ver información a cerca de los desarrolladores y un acceso a la plataforma.

* Tras haber pulsado, accedemos al panel de gestión, en ella podemos encontrar en la ventana principal información a cerca del proyecto, un tutorial de instalación, un tutorial de configuración y unos tips dónde se indican el porque es necesario que una organización tenga presencia en internet.

* En el panel de la izquierda podemos encontrar el menu principal dónde encontramos los siguientes elementos: "Organizaciones" e "Inmuebles".

**Organizaciones:**

* Listar, en este apartado podemos listar las organizaciones que se encuentran en la base de datos actualmente, la primera vez que accedemos podemos visualizar la de ejemplo. Como podemos observar, podemos filtrar las organizaciones o hacer búsquedas sobre ellas, con el objetivo de poder agilizar cuando hay una cantidad grande de información. En el apartado de Opciones: podemos modificar la organización en cuestion, podemos eliminarla o visualizarla (Esta última opción es la que muestra tal y como nos verán los usuarios que accedan a nuestra plafatorma).

* Añadir, en este apartado podemos añadir organizaciones a la base de datos, a través de esta opción es dónde añadiremos la organización que deseamos configurar. Debemos indicar los datos de la organización, el tipo (Actualmente solo se encuentra disponible el de Inmuebles), Un título (éste hará de cabecera en las secciones de "la empresa" y "servicios"), unos parrafos hablando sobre la organización (acerca), unos parrafos hablando sobre los servicios que ofrece (servicio), tambien se deberá subir una imágen representativa de la organización.

**Inmuebles:**

* Listar, ahora deberemos seleccionar la organización de la cual deseamos listar los inmuebles, una vez seleccionado pulsamos listar y se mostrarán las que se encuentran en la base de datos actualmente. Como podemos observar, podemos filtrar los inmuebles o hacer búsquedas sobre ellas, con el objetivo de poder agilizar cuando hay una cantidad grande de información. En el apartado de Opciones: podemos modificar el inmueble en cuestion, podemos eliminarla o visualizarla (Esta última opción es la que muestra tal y como nos verán los usuarios que accedan a nuestra plafatorma). Tambien podemos volver al paso anterior para poder seleccionar otra organización siempre que se de el caso.

* Añadir, en este apartado podemos añadir inmuebles de una organización determinada a la base de datos. Debemos indicar en primer lugar la organización a la cual pertenece el inmueble a añadir, luego insertaremos el titulo que deseamos que aparezca en la cabecera del inmueble, los datos del inmueble en cuestion, junto con su referencia y precio, (una vez introducidos el precio y la referencia, la aplicación de manera automática mostrará en la visualización el precio del m2), tambien deberemos indicar el certificado energético, si es de tipo: venta/alquiler, y se deberán subir las imágenes del inmueble, para ello podemos hacerlo de dos formas totalmente distintas (podemos seleccionarlas y arrastrarlas hacia la sección de seleccionar archivos o podemos usar el botón de seleccionar archivos para escogerlos, si usamos esta última opción y deseamos seleccionar mas de una imágen, tan solo debemos mantener presionados el botón "Alt" para hacerlo). Tambien podemos indicar si el inmueble en cuestión es uno de tipo destacado, esto hará que se muestre en el slider, si indicamos esta opción se deberá indicar un descripción que será mostrada en la página principal y una imágen con las medidas mostradas en esa sección.

**Una vez concluida la configuración ya podemos hacer uso completo de la plataforma. Esperamos sea de su agrado y para cualquier incidencia puede ponerse en contacto con los desarrolladores a través de los siguientes correos electrónicos: plasenciajohan@hotmail.com - avilbet@gmail.com**
