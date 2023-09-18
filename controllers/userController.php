<?php
    class userController {
        private $model;

        public function __construct() {
            require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/models/userModel.php");
            $this->model = new userModel();
        }

        public function save($name, $dni, $birthdate) {
            $id = $this->model->insert($name, $dni, $birthdate);
            return ($id != false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id){
            return ($this->model->show($id)  != false)  ? $this->model->show($id) : header("Location:index.php") ;
        }

        public function index(){
            return($this->model->index()) ? $this->model->index(): false ;
        }

        public function update($id, $name, $dni, $birthdate){
            return($this->model->update($id,$name,$dni,$birthdate) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php") ;
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }

        
    }
?>
