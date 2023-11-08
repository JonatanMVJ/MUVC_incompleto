<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre_fabricante'],$_POST['apellidos'],$_POST['direccion'],$_POST['piez_vendidas'],$_POST['telefono'],$_POST['instrumento_fabricado'],$_POST['sucursal_trabaja']);

?>