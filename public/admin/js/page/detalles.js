const detallesProducto = document.querySelector("#detalles_producto");
const btnAgregarCarrito = document.querySelector("#btn_agregar_carrito");

document.addEventListener("DOMContentLoaded", function () {
    // Aquí puedes agregar lógica específica para la página de detalles del producto

    // Por ejemplo, podrías manejar eventos de clic en el botón de agregar al carrito
    btnAgregarCarrito.addEventListener("click", function () {
        // Agregar lógica para agregar el producto al carrito
        // Puedes enviar una solicitud AJAX al servidor para agregar el producto al carrito
        // y mostrar una notificación al usuario sobre el producto agregado
        alert("Producto agregado al carrito");
    });
});

// Esta función es solo un ejemplo de cómo podrías manejar la lógica para agregar un producto al carrito
function agregarProductoAlCarrito(idProducto) {
    // Aquí podrías realizar una solicitud AJAX al servidor para agregar el producto al carrito
    // y manejar la respuesta del servidor en consecuencia
    alert("Producto con ID " + idProducto + " agregado al carrito");
}
