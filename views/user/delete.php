<?php
    require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/controllers/userController.php"); 

    $obj=new userController();
    $obj->delete($_GET['id'])


?>