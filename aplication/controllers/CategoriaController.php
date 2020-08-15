<?php

class CategoriaController{

    public function registrarCategoria(){
        if(isset($_POST["txtNombre"])){
            $nom = $_POST["txtNombre"];
            $est = $_POST["txtEstado"];
            $datos = array($nom,$est);
            

            $modelo = new CategoriaModel();
            $respuesta = $modelo->registrar($datos);

        }
    }

    public function ConsultaEspecifica(){
        if(isset($_GET["idcategoria"])){
            $id = $_GET["idcategoria"];
            $modelo = new CategoriaModel();
            $respuesta = $modelo->consultaEspecifica($id);
            return $respuesta;
        }
    }

    public function ConsultarTodas(){
        $modelo = new CategoriaModel();
        $respuesta = $modelo->consultarTodas();
        return $respuesta;
    }
}

?>