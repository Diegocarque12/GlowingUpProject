<?php 

require_once "../aplication/controllers/rutasC.php";
require_once "../aplication/controllers/ProductoC.php";
require_once "../aplication/controllers/MarcaC.php";

require_once "../aplication/models/rutasM.php";
require_once "../aplication/models/ProductoM.php";
require_once "../aplication/models/MarcaM.php";

$rutas = new RutasControlador;
$rutas -> Plantilla();

?>
