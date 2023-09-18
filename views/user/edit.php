<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/head.php");
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/controllers/userController.php");
$obj=new userController();
$user = $obj->show($_GET['id']);


?>

    <form action="update.php" method="post" autocomplete="off">
        <h2>Modificar Datos del Usuario</h2>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?=$user['id']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputPassword" value="<?=$user['name']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo DNI</label>
        <div class="col-sm-10">
            <input type="text" name="dni" class="form-control" id="inputPassword" value="<?=$user['dni']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Fecha de Nacimiento</label>
        <div class="col-sm-10">
            <input type="date" name="birthdate" class="form-control" id="inputPassword" value="<?=$user['birthdate']?>">
        </div>
    </div>
        <div>
            <input type="submit" class ="btn btn-success"  value="Modificar">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar </a>
        </div>

    </form>


<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/footer.php")

?>

