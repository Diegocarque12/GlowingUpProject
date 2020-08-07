<?php

class MarcaM extends Conexion{
    public $conexion;

    public function __construct(){
        include_once "../db/Conexion.php";
        $this->conexion = new Conexion();
    }

    public function RegistrarMarcasM($datosP){
        $sql = "INSERT INTO prueba_Marca (nombre) VALUES(:nombre)";
        $insert = $this->conexion->prepare($sql);
        $insert -> bindParam(":nombre", $datosP["nombre"], PDO::PARAM_STR);

        if($insert->execute()){
            return "Bien";
        }else{
            "Error";
        }
        $insert->close();
    }

}

?>