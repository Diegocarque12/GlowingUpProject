<?php

require_once ("../db/Mysql.php");

    class ProveedorModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function registrar(array $arrValues){
            $sql = "INSERT INTO tblproveedor(cedula_juridica, nombre, telefono, direccion, email, provincia, estado) VALUES(?,?,?,?,?,?,?)";
            parent::insert($sql,$arrValues);
        }

    }

?>