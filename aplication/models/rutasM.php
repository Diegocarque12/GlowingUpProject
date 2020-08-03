<?php

class Modelo{
    static public function RutasModelo($rutas){

        if($rutas == "nosotros" || $rutas == "contacto" || $rutas == "login" || $rutas == "registro" || $rutas == "catalogo" || $rutas == "carrito"){

            $pagina = "../views/home/".$rutas.".php";

        }else if($rutas == "inicio"){
            $pagina = "../views/home/inicio.php";
        }else{
            $pagina = "../views/home/inicio.php";
        }
        return $pagina;
    }
}