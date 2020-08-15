<?php 

require_once "../aplication/controllers/rutasController.php";
require_once "../aplication/controllers/ProductoC.php";
require_once "../aplication/controllers/MarcaController.php";
require_once "../aplication/controllers/ProveedorController.php";
require_once "../aplication/controllers/CategoriaController.php";

require_once "../aplication/models/rutasModel.php";
require_once "../aplication/models/ProveedorModel.php";
require_once "../aplication/models/CategoriaModel.php";

$rutas = new RutasControlador;
$rutas -> Plantilla();

?>
