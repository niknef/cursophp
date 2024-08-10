<?php include 'includes/header.php';


// Definición de una constante llamada 'constante' con el valor "Este es el valor de la constante"
define('constante', "Este es el valor de la constante"); 

// Imprime el valor de la constante 'constante'
echo constante; 

echo "<br>";

// Definición de una constante llamada 'constante2' con el valor "Hola 2"
const constante2 = "Hola 2"; 

// Imprime el valor de la constante 'constante2'
echo constante2;

echo "<br>";

// Declaración de una variable con el nombre $nombreCliente
$nombreCliente = "Pedro"; 

// Imprime el valor de la variable $nombreCliente
echo $nombreCliente;

echo "<br>";

// Declaración de una variable con el nombre $nombre_cliente
$nombre_cliente = "Pedro"; 

// Imprime el valor de la variable $nombre_cliente
echo $nombre_cliente;

// Declaración de una variable con una cadena de texto
$mensaje = "Hola Mundo"; 
    
// Imprime el valor de la variable $mensaje usando echo
echo $mensaje; 

echo "<br>";

// Declaración de una variable con un número entero
$numero = 123; 

// Imprime el valor de la variable $numero usando echo
echo $numero;

echo "<br>";

// Declaración de una variable con un número decimal (float)
$decimal = 3.14; 

// Imprime el valor de la variable $decimal usando echo
echo $decimal;

echo "<br>";

// Declaración de una variable con un valor booleano
$esVerdad = true; 

// Imprime el valor de la variable $esVerdad usando var_dump para mostrar su tipo y valor
var_dump($esVerdad);

echo "<br>";

// Declaración de un array
$frutas = array("Manzana", "Banana", "Naranja"); 

// Imprime el array usando print_r
print_r($frutas);

echo "<br>";

// Declaración de una variable nula
$nulo = null; 

// Imprime el valor de la variable $nulo usando var_dump para mostrar su tipo y valor
var_dump($nulo);

include 'includes/footer.php';