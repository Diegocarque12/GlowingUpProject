<?php

    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home(){
            echo "Mensaje desde el controlador";
        }
        public function datos($params){
            echo "Dato recibido: ".$params;
        }

    }

?>