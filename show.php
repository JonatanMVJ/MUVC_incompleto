<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro del fabricante</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro del fabricante?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Una vez eliminado no se podra recuperar el registro del fabricante
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre_fabricante</th>
            <th scope="col">apellidos</th>
            <th scope="col">direccion</th>
            <th scope="col">piez_vendidas</th>
            <th scope="col">telefono</th>
            <th scope="col">instrumento_fabricado</th>
            <th scope="col">sucursal_trabaja</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["nombre_fabricante"]?></td>
            <td scope="col"><?= $date["apellidos"]?></td>
            <td scope="col"><?= $date["direccion"]?></td>
            <td scope="col"><?= $date["piez_vendidas"]?></td>
            <td scope="col"><?= $date["telefono"]?></td>
            <td scope="col"><?= $date["instrumento_fabricado"]?></td>
            <td scope="col"><?= $date["sucursal_trabaja"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>