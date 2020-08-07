<?php 

require_once "../aplication/controllers/rutasC.php";
require_once "../aplication/controllers/ProductoC.php";
require_once "../aplication/controllers/MarcaC.php";

require_once "../aplication/controllers/rutasC.php";
require_once "../aplication/controllers/pruebaController.php";

require_once "../aplication/models/rutasM.php";
require_once "../aplication/models/pruebaM.php";

$rutas = new RutasControlador;
$rutas -> Plantilla();

?>
