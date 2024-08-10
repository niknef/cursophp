<?php include 'includes/header.php';

// Declaración de un array asociativo llamado $cliente
$cliente = [
    'nombre' => 'Juan', 
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium', 
        'disponible' => 100
    ]
];

// Util para ver los contenidos de un array asociativo
// Imprime el contenido del subarray 'informacion' del array $cliente usando var_dump
echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

// Acceder y mostrar valores del array asociativo
// Descomentar las siguientes líneas para imprimir los valores específicos
// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

// Añadir un nuevo elemento al array asociativo
// Asigna el valor 1209192012 al índice 'codigo' del array $cliente
$cliente['codigo'] = 1209192012;

// Util para ver los contenidos del array asociativo después de la modificación
// Imprime el contenido completo del array $cliente usando var_dump
echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';