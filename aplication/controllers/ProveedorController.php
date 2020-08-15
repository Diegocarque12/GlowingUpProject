<?php

class ProveedorController{

    public function registrarProveedor(){
        if(isset($_POST["txtCedula"])){
            $ced = $_POST["txtCedula"];
            $nom = $_POST["txtNombre"];
            $tel = $_POST["txtTelefono"];
            $dir = $_POST["txtDireccion"];
            $email = $_POST["txtEmail"];
            $prov = $_POST["txtProvincia"];
            $est = $_POST["txtEstado"];
            $datos = array($ced,$nom,$tel,$dir,$email,$prov,$est);
            

            $modelo = new ProveedorModel();
            $respuesta = $modelo->registrar($datos);

        }
    }

    public function ConsultarTodas(){
        $modelo = new ProveedorModel();
        $respuesta = $modelo->consultarTodas();
        return $respuesta;
    }
}

?>