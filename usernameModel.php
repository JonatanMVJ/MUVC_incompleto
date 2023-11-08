<?php
require_once("c://xampp/htdocs/proyecto/config/db.php");

class UsernameModel {
    private $PDO;

    public function __construct() {
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($nombre, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja) {
        $stament = $this->PDO->prepare("INSERT INTO fabricante (nombre) VALUES (:nombre)");
        
        $stament->bindParam(":nombre", $nombre); // Reemplaza 'nombre' por el nombre del campo que deseas insertar.
        $result = $stament->execute();

        if ($result) {
            return $this->PDO->lastInsertId();
        } else {
            return false;
        }
    }

    public function show($id) {
        $stament = $this->PDO->prepare("SELECT * FROM fabricante WHERE id = :id LIMIT 1");
        $stament->bindParam(":id", $id);
        $result = $stament->execute();

        if ($result) {
            return $stament->fetch();
        } else {
            return false;
        }
    }

    public function index() {
        $stament = $this->PDO->prepare("SELECT * FROM fabricante");
        $result = $stament->execute();

        if ($result) {
            return $stament->fetchAll();
        } else {
            return false;
        }
    }

    public function update($id, $nombre, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja) {
        $stament = $this->PDO->prepare("UPDATE fabricante SET nombre = :nombre WHERE id = :id");
        
        $stament->bindParam(":nombre", $nombre); // Reemplaza 'nombre' por el nombre del campo que deseas actualizar.
        $stament->bindParam(":id", $id);
        $result = $stament->execute();

        if ($result) {
            return $id;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $stament = $this->PDO->prepare("DELETE FROM fabricante WHERE id = :id");
        $stament->bindParam(":id", $id);
        $result = $stament->execute();

        return $result;
    }
}

// Ejemplo de uso:
$model = new UsernameModel();
$id = $model->insertar("Nombre", "Apellidos", "Dirección", "Piezas", "Teléfono", "Instrumento", "Sucursal");
if ($id !== false) {
    echo "Registro insertado con ID: " . $id;
} else {
    echo "Error al insertar el registro.";
}
?>
