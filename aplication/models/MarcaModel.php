<?php

require_once ("../db/Mysql.php");

    class MarcaModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function registrar(array $datos){
            $sql = "INSERT INTO tblmarca(nombre,estado) VALUES(?,?)";
            parent::insert($sql,$datos);
        }

    }

?>