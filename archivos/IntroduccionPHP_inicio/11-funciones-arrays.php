<?php include 'includes/header.php';

// Declaración de un array llamado $carrito
$carrito = ['Tablet', 'Computadora', 'Television'];

// in_array - Buscar elementos en un arreglo
// Usa var_dump para imprimir el resultado de in_array buscando 'Tablet' en el array $carrito
var_dump( in_array('Tablet', $carrito) ); // true, porque 'Tablet' está en $carrito

// Usa var_dump para imprimir el resultado de in_array buscando 'Audifonos' en el array $carrito
var_dump( in_array('Audifonos', $carrito) ); // false, porque 'Audifonos' no está en $carrito

echo "<br>";

// Declaración de un array llamado $numeros
$numeros = array(1,3,4,5,1,2);

// Ordenar elementos de un arreglo
// sort - Ordena el array $numeros de menor a mayor
sort($numeros); 

// Usa var_dump para imprimir el array $numeros después de usar sort
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// rsort - Ordena el array $numeros de mayor a menor
rsort($numeros);

// Usa var_dump para imprimir el array $numeros después de usar rsort
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Declaración de un array asociativo llamado $cliente
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

// Usa var_dump para imprimir el array asociativo $cliente
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Ordenar arreglo asociativo
// asort - Ordena el array $cliente por valores en orden alfabético
asort($cliente); 

// Usa var_dump para imprimir el array $cliente después de usar asort
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// arsort - Ordena el array $cliente por valores en orden inverso (Z primero)
arsort($cliente);

// Usa var_dump para imprimir el array $cliente después de usar arsort
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// ksort - Ordena el array $cliente por llaves en orden alfabético
ksort($cliente);

// Usa var_dump para imprimir el array $cliente después de usar ksort
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// krsort - Ordena el array $cliente por llaves en orden inverso (de la Z a la A)
krsort($cliente);

// Usa var_dump para imprimir el array $cliente después de usar krsort
echo "<pre>";
var_dump($cliente);

include 'includes/footer.php';