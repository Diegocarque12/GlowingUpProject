<?php 

require_once "../aplication/controllers/rutasC.php";
require_once "../aplication/models/rutasM.php";

$rutas = new RutasControlador;
$rutas -> Plantilla();
