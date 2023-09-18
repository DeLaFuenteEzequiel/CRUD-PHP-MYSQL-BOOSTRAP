<?php
    require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/controllers/userController.php");
    $obj=new userController();
    $obj->update($_POST['id'],$_POST['name'],$_POST['dni'],$_POST['birthdate']);

?>