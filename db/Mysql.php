<?php
    include_once "Conexion.php";

    class Mysql extends Conexion{
        private $conexion;

        function __construct(){
            $this->conexion = new Conexion();
        }
    
        public function insert(string $query, array $datos){
            $insert = $this->conexion->prepare($query);
            //$resInsert = 
            $insert->execute($datos);
            //echo "Estado".$resInsert;
            //print_r($insert);
            //print_r($datos);
            //print_r($query);
            //if($resInsert){
              //  echo "entro en el if";
                //$lastInsert = $this->conexion->lastInsertId();
            //}else{
               // echo "entro en el else";
              //  $lastInsert = 0;
            //}
            //$this->conexion->close();
            //return $lastInsert;
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
            $resExecute = $update->execute($arrValues);
            
            $confirm;
            if($resExecute){
                $confirm = 1;
            }else{
                $confirm = 0;
            }
            $resExecute->close();
            return $confirm;
        }

    }
?>