<?php

    class RutasControlador{

        public function Plantilla(){
            include "../aplication/views/plantilla.php";
        }

        public function Rutas(){
            if(isset($_GET['ruta'])){
                $views = explode("/", $_GET['ruta']);
                if(is_file("../aplication/views/home/".$views[0].".php") || is_file("../aplication/views/admin/".$views[0].".php")){
                    $rutas = $views[0];
                }else{
                    $rutas = "inicio";
                }
            }else{
                $rutas = "inicio";
            }
            $respuesta = Modelo::RutasModelo($rutas);
    
            include $respuesta;
        }
}

?>