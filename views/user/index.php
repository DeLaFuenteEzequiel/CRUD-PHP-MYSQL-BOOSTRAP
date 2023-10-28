<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/head.php"); 
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/controllers/userController.php"); 
    $obj= new userController();
    $rows= $obj->index();


?>


<table class="table">
    <thead>
        <tr>
            <th scope ="col">ID</th>
            <th scope ="col">Nombre</th>
            <th scope ="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['name'] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row['id']?>" class= "btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row['id']?>" class= "btn btn-success">Modificar</a>


                       
                       <a class="btn btn-danger" data-toggle="modal" data-target="#id<?=$row[0]?>">Eliminar</a>
    
                                <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">Eliminar</a>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>  


                        
                    </th>
                </tr>
            <?php endforeach; ?>   
         <?php else: ?>   
                <tr>
                    <td colspan="3" class= "text">No Hay Usuarios Almacenados</td>
                </tr>
       <?php endif; ?>

    </tbody>
</table>


<?php
require_once("c://xampp/htdocs/CRUD-PHP-MYSQL-BOOSTRAP/views/head/footer.php"); 


?>
