<?php
require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");

class UsernameController {
    private $model;

    public function __construct() {
        $this->model = new UsernameModel();
    }

    public function guardar($nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja) {
        $id = $this->model->insertar($nombre_fabricante); // Reemplaza 'nombre_fabricante' por la variable que desees insertar.
        if ($id !== false) {
            header("Location: show.php?id=" . $id);
        } else {
            header("Location: create.php");
        }
    }

    public function show($id) {
        $result = $this->model->show($id);
        if ($result !== false) {
            return $result;
        } else {
            header("Location: index.php");
        }
    }

    public function index() {
        $result = $this->model->index();
        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }

    public function update($id, $nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja) {
        $result = $this->model->update($id, $nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja);
        if ($result !== false) {
            header("Location: show.php?id=" . $id);
        } else {
            header("Location: index.php");
        }
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        if ($result !== false) {
            header("Location: index.php");
        } else {
            header("Location: show.php?id=" . $id);
        }
    }
}

// Uso:
$controller = new UsernameController();
// Ejemplo de llamada a la función guardar:
$controller->guardar("Nombre", "Apellidos", "Dirección", "Piezas", "Teléfono", "Instrumento", "Sucursal");
?>
