<?php
    include_once "Conexion.php";

    class Mysql extends Conexion{
        private $conexion;

        function __construct(){
            $this->conexion = new Conexion();
        }
    
        public function insert(string $query, array $arrValues){
            $insert = $this->conexion->prepare($query);
            $resInsert = $insert->execute($this->arrValues);
            if($resInsert){
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        public function select(string $query){
            $result = $this->conexion->prepare($query);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public function selectAll(string $query){
            $result = $this->conexion->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function update(string $query, array $arrValues){
            $update = $this->conexion->prepare($query);
            $resExecute = $update->execute($this->arrValues);
            $confirm;
            if($resExecute){
                $confirm = 1;
            }else{
                $confirm = 0;
            }
            return $confirm;
        }

    }
?>