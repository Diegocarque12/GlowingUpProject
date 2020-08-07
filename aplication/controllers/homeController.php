<?php

    class Home{

        public function __construct(){

        }

        public function home(){

        }

        public function insertar(){
            $data = $this->model->setProduct();
            print_r($data);
        }

    }

?>