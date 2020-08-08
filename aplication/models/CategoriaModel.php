<?php

require_once ("../db/Mysql.php");

    class CategoriaModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function registrar(array $arrValues){
            $sql = "INSERT INTO tblcategoria(nombre, estado) VALUES(?,?)";
            parent::insert($sql,$arrValues);
        }

        public function consultaEspecifica($id){
            $sql = "SELECT * FROM tblcategoria WHERE idcategoria =".$id;
            $result = parent::select($sql);
            return $result;
        }

        public function consultarTodas(){
            $sql = "SELECT idcategoria, nombre, estado FROM tblcategoria";
            $result = parent::selectAll($sql);
            return $result;
        }

    }

?>