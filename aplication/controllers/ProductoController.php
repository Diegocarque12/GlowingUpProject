<?php

class ProductoC{

    public function RegistrarProductoC(){
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $arrData = array($nombre);
            
            /*$modelo = new ProductoModel();
            $modelo->insertar($arrData);*/
        }
    }
}

?>