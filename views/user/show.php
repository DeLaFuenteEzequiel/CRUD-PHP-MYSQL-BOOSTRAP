<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/head.php");
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/controllers/userController.php");
$obj=new userController();
$date = $obj->show($_GET['id']);

?>
<h2 class ="texte-center">Detalles del Usuario</h2>
<div class="pb3">
<a href="index.php" class= "btn btn-primary">Regresar</a>
<a href="edit.php?id=<?= $date[0]?>" class= "btn btn-success">Modificar</a>
        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</a>
    

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea Eliminar al Usuario?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Una vez eliminado el usuario, no se podra recuperar su informacion 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success " data-dismiss="modal">Cerrar</button>
                <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger" >Eliminar</a>
                
            </div>
            </div>
        </div>
        </div>
        </div>


<table class = "table container-fluid" >
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">DNI</th>
            <th scope="col">Fecha de Nacimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope = "col"><?= $date["id"]?></td>
            <td scope = "col"><?= $date["name"]?></td> 
            <td scope = "col"><?= $date["dni"]?></td> 
            <td scope = "col"><?= $date["birthdate"]?></td> 
        </tr>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/footer.php")

?>

