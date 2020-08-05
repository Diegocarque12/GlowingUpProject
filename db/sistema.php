<?php

    require_once("autoload.php");

    $objProducto = new Producto();

    $insert = $objProducto->insertProducto(2,"producto1", "image/path","descripcion_extensa", "descripcion_breve", 1500, 15,"rojo,negro", "habilitado", 10.0, 5.0, 1);
    //echo $insert;

?>