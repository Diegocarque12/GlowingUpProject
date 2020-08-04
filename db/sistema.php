<?php

    require_once("autoload.php");

    $objProducto = new Producto();

    $insert = $objProducto->insertProducto("1","producto1", "image/path","descripcion_extensa", "descripcion_breve", "150.0",);
    echo $insert;

?>