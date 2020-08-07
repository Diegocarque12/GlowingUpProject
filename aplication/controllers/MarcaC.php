<?php

    class MarcaC{

        public function RegistrarMarcaC(){
            if(isset($_POST["txtNombre"])){
                $datosP = array("nombre"=>$_POST["txtNombre"]);

                $a = new MarcaM();
                $respuesta = $a->RegistrarMarcasM($datosP);

            }
        }
    }

?>