<?php


require_once ("../db/Mysql.php");

    class ProductoModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }

        public function RegistrarProductosM(array $datos){
            $sql = "INSERT INTO tblproducto(nombre,imagenes, descripcion_extensa,descripcion_breve,precioVenta,
            cantidad,colores,estado,descuento, valoracion_general, idMarca) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            parent::insert($sql,$datos);
        }

        public function cargarSelect(){
            $sql = "SELECT idMarca from tblmarca";
            parent::select($sql);
        }


    }

?>