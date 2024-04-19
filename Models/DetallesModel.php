<?php

require_once "Conexion.php"; // Asegúrate de incluir el archivo de la clase Conexion

class DetallesModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion(); // Crear una nueva instancia de la clase Conexion para obtener la conexión PDO
    }

    // Método para obtener los detalles del producto por ID
    public function obtenerDetallesProducto($idProducto) {
        $sql = "SELECT * FROM productos WHERE id = :id";
        $stmt = $this->db->conect()->prepare($sql);
        $stmt->bindParam(':id', $idProducto, PDO::PARAM_INT);
        $stmt->execute();
        $detallesProducto = $stmt->fetch(PDO::FETCH_ASSOC);

        return $detallesProducto;
    }
}

?>

