<?php include 'includes/header.php';
// Definimos un arreglo multidimensional que contiene productos con sus detalles
$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

// Utilizamos <pre> para dar formato legible a la salida en HTML
echo "<pre>";

// var_dump muestra la estructura y contenido del arreglo $productos
var_dump($productos);

// Convertimos el arreglo $productos a una cadena JSON
// La opción JSON_UNESCAPED_UNICODE asegura que los caracteres Unicode no se escapen
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

// Decodificamos la cadena JSON de nuevo a un arreglo
$json_array = json_decode($json);

// var_dump muestra la cadena JSON y el arreglo decodificado
var_dump($json);
var_dump($json_array);

// Cerramos la etiqueta <pre>
echo "</pre>";

/*
Definición del Arreglo $productos:

El arreglo $productos contiene información sobre varios productos, cada uno representado por un arreglo asociativo con nombre, precio y disponible.
Formato de Salida Legible:

echo "<pre>"; y echo "</pre>"; se utilizan para dar formato legible a la salida HTML de var_dump.
var_dump($productos):

Muestra la estructura y contenido del arreglo $productos.
Conversión a JSON:

json_encode($productos, JSON_UNESCAPED_UNICODE); convierte el arreglo $productos a una cadena JSON.
La opción JSON_UNESCAPED_UNICODE asegura que los caracteres Unicode no se escapen, permitiendo que caracteres especiales (como las tildes y ñ) se mantengan legibles.
Decodificación de JSON:

json_decode($json); convierte la cadena JSON de nuevo a un arreglo (o un objeto, dependiendo de la segunda opción, que por defecto es false y retorna un objeto).
var_dump del JSON y del Arreglo Decodificado:

var_dump($json); muestra la cadena JSON.
var_dump($json_array); muestra el arreglo resultante de la decodificación del JSON.
Este ejemplo muestra cómo trabajar con datos JSON en PHP, desde la conversión de un arreglo a JSON hasta la decodificación del JSON de nuevo a un arreglo (u objeto).
*/ 
include 'includes/footer.php';