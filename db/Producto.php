<?php

class Producto extends Conexion{
    private $db_idProducto;
    private $db_nombre;
    private $db_imagenes;
    private $db_descripcion_extensa;
    private $db_descripcion_breve;
    private $db_precioVenta;
    private $db_cantidad;
    private $db_colores;
    private $db_estado;
    private $db_descuento;
    private $db_valoracion_general;
    private $db_idMarca;

    private $conexion;

    public function __contruct(){
        $this->conexion = new Conexion();
    }

    public function insertProducto(int $idProducto, string $nombre, string $imagenes, string $descripcion_extensa, string $descripcion_breve, decimal $precioVenta, int $cantidad, string $colores, string $estado, decimal $descuento, decimal $valoracion_general, int $idMarca)
    {
        this->db_idProducto = $idProducto;
        this->db_nombre = $nombre;
        this->db_imagenes = $imagenes;
        this->db_descripcion_extensa = $descripcion_extensa;
        this->db_descripcion_breve = $descripcion_breve;
        this->db_precioVenta = $precioVenta;
        this->db_cantidad = $cantidad;
        this->db_colores = $colores;
        this->db_estado = $estado;
        this->db_descuento = $descuento;
        this->db_valoracion_general = $valoracion_general;
        this->db_idMarca = $idMarca;

        $sql = "INSERT INTO tblproducto(idProducto, nombre, imagenes, descripcion_extensa, descripcion_breve, precioVenta, cantidad, colores, estado, descuento, valoracion_general, idMarca) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array(this->db_idProducto,this->db_nombre,this->db_imagenes,this->db_descripcion_extensa,this->db_descripcion_breve,this->db_precioVenta,this->db_cantidad,this->db_colores,this->db_estado,this->db_descuento,this->db_valoracion_general,this->db_idMarca);
        $resInsert = $insert->execute($arrData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;
    }

}

?>