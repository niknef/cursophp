<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;

// Suma
echo $numero1 + $numero2;
echo '<br>';

// Resta    
echo $numero1 - $numero2;
echo '<br>';

// Multiplicación
echo $numero1 * $numero2;
echo '<br>';

// Multiplicación por cierta cantidad de veces
echo 2 ** 3;
echo '<br>';

// División
echo $numero1 / $numero2;
echo '<br>';

// Módulo
echo $numero1 % $numero2;
echo '<br>';

// Exponenciación
echo $numero1 ** $numero2;
echo '<br>';

// Asignación
$numero1 += $numero2;
echo $numero1;
echo '<br>';

// Comparación
var_dump($numero1 == $numero2);
echo '<br>';

include 'includes/footer.php';