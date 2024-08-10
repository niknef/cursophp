<?php include 'includes/header.php';

// Declaración de arrays
$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');

// Declaración de un array asociativo llamado $cliente
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - Revisa si un arreglo está vacío
// Usa var_dump para imprimir el resultado de empty sobre el array $clientes
var_dump( empty($clientes) ); // true, porque $clientes está vacío

// Usa var_dump para imprimir el resultado de empty sobre el array $clientes3
var_dump( empty($clientes3) ); // false, porque $clientes3 tiene elementos

// Usa var_dump para imprimir el resultado de empty sobre el array $clientes2
var_dump( empty($clientes2) ); // true, porque $clientes2 está vacío

echo "<br>";

// Isset - Revisar si un arreglo está creado o una propiedad está definida
// Usa var_dump para imprimir el resultado de isset sobre el array $clientes4
var_dump( isset($clientes4) ); // false, porque $clientes4 no está definido

// Usa var_dump para imprimir el resultado de isset sobre el array $clientes
var_dump( isset($clientes) ); // true, porque $clientes está definido

// Usa var_dump para imprimir el resultado de isset sobre el array $clientes2
var_dump( isset($clientes2) ); // true, porque $clientes2 está definido

// Usa var_dump para imprimir el resultado de isset sobre el array $clientes3
var_dump( isset($clientes3) ); // true, porque $clientes3 está definido

// Isset - Permite revisar si una propiedad de un arreglo asociativo existe
// Usa var_dump para imprimir el resultado de isset sobre el índice 'nombre' del array $cliente
var_dump( isset($cliente['nombre']) ); // true, porque 'nombre' está definido en $cliente

// Usa var_dump para imprimir el resultado de isset sobre el índice 'codigo' del array $cliente
var_dump( isset($cliente['codigo']) ); // false, porque 'codigo' no está definido en $cliente


include 'includes/footer.php';