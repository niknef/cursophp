<?php include 'includes/header.php';

// Definimos un arreglo multidimensional que contiene productos con sus detalles
$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

// Recorremos cada elemento del arreglo $productos
foreach( $productos as $producto) { ?>
    <!-- Cada producto se imprime como un elemento de lista -->
    <li>
        <!-- Imprimimos el nombre del producto -->
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <!-- Imprimimos el precio del producto -->
        <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
        <!-- Verificamos si el producto está disponible y mostramos el estado correspondiente -->
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible';  ?> </p>
    </li>
    <?php
}


include 'includes/footer.php';