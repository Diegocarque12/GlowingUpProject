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
          valoracion_general, idMarca) VALUES(:idProducto,:nombre,:imagenes,:descripcion_extensa,:descripcion_breve,
          :precioVenta, :cantidad,:colores,:estado,:descuento,:valoracion_general,:idMarca)";
          
        $insert = $this->conexion->prepare($sql);
        echo "entra al prepare";
        $insert -> bindParam(":nombre", $datosP["nombre"], PDO::PARAM_STR);
        $insert -> bindParam(":imagenes", $datosP["imagen"], PDO::PARAM_STR);
        $insert -> bindParam(":descripcion_extensa", $datosP["descripcion_extensa"], PDO::PARAM_STR);
        $insert -> bindParam(":descripcion_breve", $datosP["descripcion_breve"], PDO::PARAM_STR);
        $insert -> bindParam(":precioVenta", $datosP["precioVenta"], PDO::PARAM_STR);
        $insert -> bindParam(":cantidad", $datosP["cantidad"], PDO::PARAM_INT);
        $insert -> bindParam(":colores", $datosP["colores"], PDO::PARAM_STR);
        $insert -> bindParam(":estado", $datosP["estado"], PDO::PARAM_STR);
        $insert -> bindParam(":descuento", $datosP["descuento"], PDO::PARAM_STR);
        $insert -> bindParam(":valoracion_general", $datosP["valoracion_general"], PDO::PARAM_STR);
        $insert -> bindParam(":idMarca", $datosP["idMarca"], PDO::PARAM_STR);

        if($insert->execute()){
            return "Bien";
        }else{
            "Error";
        }
        $insert->close();
    }

}

?>
("nombre"=>$_POST["txtNombre"],
                    "descripcion_extensa"=>$_POST["txtDescripcionE"],
                    "imagen"=>$_POST["txtImagen"],
                    "descripcion_breve"=>$_POST["txtDescripcionB"],
                    "precio_Venta"=>$_POST["txtPrecioV"],
                    "cantidad"=>$_POST["txtCantidad"],
                    "colores"=>$_POST["txtColores"],
                    "estado"=>$_POST["txtEstado"],
                    "descuento"=>$_POST["txtDescuento"],
                    "valoracion_general"=>$_POST["txtValoracionG"],
                    "idMarca"=>$_POST["txtMarca"]);