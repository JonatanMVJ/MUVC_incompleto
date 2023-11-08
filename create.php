<?php
require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del fabricante</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
