<?php 

require_once "../aplication/controllers/rutasController.php";
require_once "../aplication/controllers/ProductoController.php";
require_once "../aplication/controllers/MarcaController.php";

require_once "../aplication/controllers/rutasController.php";

require_once "../aplication/models/rutasModel.php";
require_once "../aplication/models/MarcaModel.php";
require_once "../aplication/models/ProductoModel.php";

$rutas = new RutasControlador;
$rutas -> Plantilla();

?>
