<?php

class ProductoController{

    public function RegistrarProductoC(){
        if(isset($_POST["txtNombre"])){
            $nombre = $_POST["txtNombre"];

            foreach ($_FILES['imagen']['name'] as $key => $name){
		
                $newFilename = time() . "_" . $name;
                move_uploaded_file($_FILES['imagen']['tmp_name'][$key], '../public/src/' . $newFilename);
                $imagen = '../public/src/' . $newFilename;
            }
            //$imagen = $validar;
            $descripcion_extensa = $_POST["txtDescripcionE"];
            $descripcion_breve = $_POST["txtDescripcionB"];
            $precio_Venta = $_POST["txtPrecioV"];
            $cantidad = $_POST["txtCantidad"];
            $colores = $_POST["txtColores"];
            $estado = $_POST["txtEstado"];
            $descuento = $_POST["txtDescuento"];
            $valoracion_general = $_POST["txtValoracionG"];
            $idMarca = $_POST["txtMarca"];


            $datos = array($nombre,$imagen, $descripcion_extensa, $descripcion_breve,$precio_Venta,
            $cantidad, $colores, $estado, $descuento, $valoracion_general,$idMarca);
            
            $producto = new ProductoModel();
            $respuesta = $producto->RegistrarProductosM($datos);
        }
    }



}

?>
