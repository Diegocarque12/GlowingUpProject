<?php
require_once("../db/Conexion.php");
class ProductoM extends Conexion{
     public $conexion;

     public function __construct(){
        include_once "../db/Conexion.php";
        $this->conexion = new Conexion();
    }

     public function RegistrarProductosM($datosP)
    {

        $sql = "INSERT INTO tblproducto (idProducto, nombre, imagenes, descripcion_extensa,
          descripcion_breve, precioVenta, cantidad, colores, estado, descuento,
          valoracion_general, idMarca) VALUES(:idProducto,:nombre,:imagen,:descripcion_extensa,:descripcion_breve,
          :precioVenta, :cantidad,:colores,:estado,:descuento,:valoracion_general,:idMarca)";
          print_r($datosP);
        $insert = $this->conexion->prepare($sql);
        $insert -> bindParam(":nombre", $datosP["nombre"], PDO::PARAM_STR);
        $insert -> bindParam(":imagen", $datosP["imagen"], PDO::PARAM_STR);
        $insert -> bindParam(":descripcion_extensa", $datosP["descripcion_extensa"], PDO::PARAM_STR);
        $insert -> bindParam(":descripcion_breve", $datosP["descripcion_breve"], PDO::PARAM_STR);
        $insert -> bindParam(":precioVenta", $datosP["precio_Venta"], PDO::PARAM_STR);
        $insert -> bindParam(":cantidad", $datosP["cantidad"], PDO::PARAM_INT);
        $insert -> bindParam(":colores", $datosP["colores"], PDO::PARAM_STR);
        $insert -> bindParam(":estado", $datosP["estado"], PDO::PARAM_STR);
        $insert -> bindParam(":descuento", $datosP["descuento"], PDO::PARAM_STR);
        $insert -> bindParam(":valoracion_general", $datosP["valoracion_general"], PDO::PARAM_STR);
        $insert -> bindParam(":idMarca", $datosP["idMarca"], PDO::PARAM_INT);

        if($insert->execute()){
            return "Bien";
        }else{
            "Error";
        }
        $insert->close();
    }

}

?>