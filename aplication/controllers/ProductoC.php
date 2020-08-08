<?php

    class ProductoC{

        public function RegistrarProductoC(){
            if(isset($_POST["txtNombre"])){
                $datosP = array("nombre"=>$_POST["txtNombre"],
                    "imagen"=>$_POST["txtImagen"],
                    "descripcion_extensa"=>$_POST["txtDescripcionE"],
                    "descripcion_breve"=>$_POST["txtDescripcionB"],
                    "precio_Venta"=>$_POST["txtPrecioV"],
                    "cantidad"=>$_POST["txtCantidad"],
                    "colores"=>$_POST["txtColores"],
                    "estado"=>$_POST["txtEstado"],
                    "descuento"=>$_POST["txtDescuento"],
                    "valoracion_general"=>$_POST["txtValoracionG"],
                    "idMarca"=>$_POST["txtMarca"]);
                $producto = new ProductoM();
                $respuesta = $producto->RegistrarProductosM($datosP);
            }
        }
    }

?>