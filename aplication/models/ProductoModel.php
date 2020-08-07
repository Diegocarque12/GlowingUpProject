<?php

    class ProductoModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        /*cambiar a la tabla correspondiente y los datos
        public function registrar(array $arrValues){
            $sql = "INSERT INTO prueba_marca(nombre) VALUES(?)";
            parent::insert($sql,$arrValues);
        }*/

    }

?>