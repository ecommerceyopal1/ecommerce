<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>DETALLES</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>DETALLES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<body class="bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="col-lg-9 col-md-7">
            <div class="row">
                <?php
                // Verificar si hay un producto para mostrar
                if (!empty($data['producto'])) {
                    $producto = $data['producto'];
                ?>
                    <div class="max-w-4xl mx-auto px-4 py-8">
                        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="md:flex-shrink-0">
                                <img src="<?php echo BASE_URL . 'public/img/productos/' . $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" class="w-full h-full object-cover md:w-48" />
                            </div>
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                                    <?php echo $producto['nombre']; ?>
                                </div>
                                
                  
                                <p class="mt-2 text-zinc-500">
                                    DESCRIPCIÓN: <?php echo $producto['descripcion']; ?>
                                </p>
                                <div class="mt-4">
                                    <span class="text-teal-600 text-md font-semibold">PRECIO: <?php echo '$' . number_format($producto['precio'], 2) . ' PESOS'; ?></span>
                                </div>
                                <div class="mt-4">
                                    <a href="./productos" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Regresar Atrás</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    // Si no hay producto para mostrar
                    echo "<p>No se encontró el producto.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

<?php include "Views/template/footer.php"; ?>

</html>
