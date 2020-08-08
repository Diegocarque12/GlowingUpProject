<?php

class MarcaC{

    public function RegistrarMarcaC(){
        if(isset($_POST["txtNombre"])){
            $datosP = array("nombre"=>$_POST["txtNombre"]);

            $modelo = new MarcaModel();
            $respuesta = $modelo->registrar($datosP);

        }
    }
}

?>