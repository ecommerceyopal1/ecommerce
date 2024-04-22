<?php

require_once "Models/DetallesModel.php";

class DetallesController {
    private $detallesModel;

    public function __construct() {
        $this->detallesModel = new DetallesModel();
    }

    public function mostrarDetalles($idProducto) {
        $product_details = $this->detallesModel->obtenerDetallesProducto($idProducto);

        if ($product_details) {
            // Incluye la vista de detalles y pasa los detalles del producto
            include "Views\principal\detalles.php";
        } else {
            // Si no se encontraron detalles del producto, muestra un mensaje de error
            echo "<p>Producto no encontrado.</p>";
        }
    }
}

?>
