<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// Declaración de un array
$carrito = array('Producto 1', 'Producto 2', 'Producto 3'); 
    
// Util para ver los contenidos de un array
// Imprime el contenido completo del array $carrito usando var_dump
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
// Imprime el elemento en el índice 1 del array $carrito
echo $carrito[1];

echo "<br>";

// Añade un elemento en el índice 3 del arreglo
// Asigna 'Nuevo Producto...' al índice 3 del array $carrito
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
// Usa array_push para añadir 'Audifonos' al final del array $carrito
array_push($carrito, 'Audifonos');

// Añadir al inicio
// Usa array_unshift para añadir 'Smartwatch' al inicio del array $carrito
array_unshift($carrito, 'Smartwatch');

// Util para ver los contenidos de un array
// Imprime el contenido completo del array $carrito después de las modificaciones usando var_dump
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Declaración de otro array llamado $clientes
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3'); 

// Util para ver los contenidos de un array
// Imprime el contenido completo del array $clientes usando var_dump
echo "<pre>";
var_dump($clientes);
echo "</pre>";

// Acceder a un elemento del array $clientes
// Imprime el elemento en el índice 1 del array $clientes
echo $clientes[1];

include 'includes/footer.php';