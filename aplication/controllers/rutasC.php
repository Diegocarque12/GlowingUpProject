<?php

    class RutasControlador{

        public function Plantilla(){
<<<<<<< HEAD
            include "../aplication/views/plantilla.php";
        }

        public function Rutas(){
            if(isset($_GET["ruta"])){
                $rutas = $_GET["ruta"];
            }else{
                $rutas = "index";
            }
    
            $respuesta = Modelo::RutasModelo($rutas);
    
            include $respuesta;
    
=======
            include "../views/layout/plantilla.php";
        }
    
    public function Rutas(){
        if(isset($_GET["ruta"])){
            $rutas = $_GET["ruta"];
        }else{
            $rutas = "index";
>>>>>>> develop
        }

    }
<<<<<<< HEAD
=======
}

>>>>>>> develop
?>