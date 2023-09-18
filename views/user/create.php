<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/head.php"); 


?>

    <form action="store.php" method="POST" autocomplete="off">
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="name" Required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">DNI</label>
        <input type="text" name="dni" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Fecha de Nacimiento</label>
        <input type="date" name= "birthdate" class="form-control" id="exampleInputPassword1">
    </div>



    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    <a class= "btn btn-danger" href="index.php">Cancelar</a>
    </form>




<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/footer.php"); 


?>
