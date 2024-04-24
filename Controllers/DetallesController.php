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
            include "Views/principal/detalles.php"; // Corregido el uso de barras diagonales
    } else {
            // Si no se encontraron detalles del producto, muestra un mensaje de error
            echo "<p>Producto no encontrado.</p>";
        }
    }
    public function detalles()
{
    // Obtener el ID del producto de la URL
    $idProducto = $_GET['id'];

    // Obtener los detalles del producto por su ID
    $data['producto'] = $this->model->getProducto($idProducto);

    // Pasar los detalles del producto a la vista
    $this->views->getView('principal', "detalles", $data);
}

}

?>
