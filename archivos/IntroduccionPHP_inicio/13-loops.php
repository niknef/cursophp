<?php include 'includes/header.php';

// While loop
$i = 0; // Inicializador

while($i < 10) {
    // Mientras $i sea menor que 10, se ejecutará el siguiente bloque de código
    echo $i . "<br>"; // Imprime el valor actual de $i seguido de un salto de línea en HTML
    $i++; // Incrementa el valor de $i en 1
}

echo "<br>"; // Imprime un salto de línea en HTML para separar los resultados

// Do While loop
$i = 100; // Inicializador

do {
    // El bloque de código se ejecuta al menos una vez, y luego se verifica la condición
    echo $i . "<br>"; // Imprime el valor actual de $i seguido de un salto de línea en HTML
    $i++; // Incrementa el valor de $i en 1
} while($i < 10); // La condición se verifica después de ejecutar el bloque de código

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop
for($i = 1; $i < 1000; $i++ ):
    // El bucle se ejecuta mientras $i sea menor que 1000
    if($i % 3 === 0 && $i % 5 === 0):
        // Si $i es divisible por 3 y por 5, imprime "FIZZ BUZZ"
        echo $i . " - FIZZ BUZZ <br/>";
    elseif($i % 3 === 0):
        // Si $i es divisible por 3, imprime "Fizz"
        echo $i . " - Fizz <br/>";
    elseif($i % 5 === 0 ):
        // Si $i es divisible por 5, imprime "Buzz"
        echo $i . " - Buzz <br/>";
    else:
        // Si ninguna de las condiciones anteriores se cumple, imprime el valor de $i
        echo $i . "<br/>";
    endif;
endfor;

// For Each
$clientes = array('Pedro', 'Juan', 'Karen'); // Definimos un arreglo de clientes

foreach( $clientes as $cliente ):
    // Recorre cada elemento del arreglo $clientes
    echo $cliente . '<br/>'; // Imprime el valor actual de $cliente seguido de un salto de línea en HTML
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
]; // Definimos un arreglo asociativo con información de un cliente

foreach( $cliente as $key => $valor ):
    // Recorre cada par clave-valor del arreglo $cliente
    echo $key . " - " . $valor . '<br/>'; // Imprime la clave y el valor actual seguidos de un salto de línea en HTML
endforeach;


include 'includes/footer.php';