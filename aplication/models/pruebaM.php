<?php
require_once ("../db/Mysql.php");

    class pruebaM extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function insertar(array $arrValues){
            $sql = "INSERT INTO prueba_marca(nombre) VALUES(?)";
            parent::insert($sql,$arrValues);
        }

    }

?>