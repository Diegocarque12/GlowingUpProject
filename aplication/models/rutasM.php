<?php

class Modelo{
    static public function RutasModelo($rutas){

        if($rutas == "nosotros" || $rutas == "contacto" || $rutas == "login" || $rutas == "registro" || $rutas == "catalogo" || $rutas == "carrito"){

            $pagina = "../aplication/views/home/".$rutas.".php";

        }else if($rutas == "inicio"){
            $pagina = "../aplication/views/home/inicio.php";
        }else{
            $pagina = "../aplication/views/home/inicio.php";
        }
        return $pagina;
    }
}