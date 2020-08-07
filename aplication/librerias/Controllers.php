<?php
    class Controllers{
        
        public function __construct(){
        $this->loadModel();
        }

    public function loadModel(){
        //HomeModel
        $model = get_class($this)."Model";
        $routClass="../models/".$model.".php";
        if(file_exists($routClass)){
            require_once($routClass);
            $this->model = new $model();
        }
    }
}
?>