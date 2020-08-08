<?php

class MarcaController{

    public function RegistrarMarcaC(){
        if(isset($_POST["txtNombre"])){
            $nombre = $_POST["txtNombre"];
            $estado = $_POST["txtEstado"];

            $datos = array($nombre,$estado);

            $modelo = new MarcaModel();
            $respuesta = $modelo->registrar($datos);


        }
    }
}

?>