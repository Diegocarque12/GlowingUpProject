<?php

class pruebaController{

    public function insertMarca(){
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $arrData = array($nombre);
            
            $prueba = new PruebaM();
            $prueba->insertar($arrData);
        }
    }
}

?>