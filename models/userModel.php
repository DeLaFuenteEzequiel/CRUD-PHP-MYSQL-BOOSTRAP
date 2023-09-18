<?php
class userModel{
    private $PDO;
    public function __construct(){
        require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/config/db.php");
        $con = new db();
        $this->PDO =  $con->connection();
    }

    //Metodo insertar en la bd
    public function insert($name, $dni, $birthdate) {
        $statement = $this->PDO->prepare("INSERT INTO users VALUES (null, :name, :dni, :birthdate)");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":dni", $dni);
        $statement->bindParam(":birthdate", $birthdate);
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }
    
    //Metodo que trae un usuario por ID
    public function show($id){
        $statement = $this->PDO->prepare("SELECT * FROM users where id = :id limit 1");
        $statement->bindParam(":id",$id);
        return($statement->execute()) ? $statement->fetch() : false;
    }

    //Metodo que trae todos los usuarios 

    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM users");
        return($statement->execute()) ?$statement->fetchAll() : false ;
    }

    //Metodo para actualizar datos usuario

    public function update($id,$name,$dni,$birthdate){
        $statement = $this->PDO->prepare("UPDATE users SET name = :name, dni = :dni, birthdate = :birthdate WHERE id = :id");
        $statement->bindParam(":id",$id);
        $statement->bindParam(":name",$name);
        $statement->bindParam(":dni",$dni);
        $statement->bindParam(":birthdate",$birthdate);
        return ($statement->execute()) ? $id : false ;
    }

    //Metodo para eliminar usuario

    public function delete($id){
        $statement = $this->PDO->prepare("DELETE FROM users WHERE id = :id");
        $statement->bindParam(":id",$id);
        return($statement->execute()) ? true : false;
    }

}


?>