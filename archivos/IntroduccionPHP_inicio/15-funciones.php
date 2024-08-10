<?php 
declare(strict_types=1);
/*
La declaración declare(strict_types=1); en PHP habilita el modo de tipos estrictos para el archivo en el que se encuentra. Esto significa que los tipos de datos especificados en las declaraciones de funciones y métodos serán estrictamente verificados. Si los tipos de datos no coinciden exactamente con lo esperado, se generará un error de tipo en lugar de intentar hacer una conversión de tipo automática.

Beneficios del Modo Estricto
Seguridad: Reduce los errores al asegurarse de que los datos tienen el tipo correcto, lo que puede prevenir bugs difíciles de detectar.
Claridad: Obliga a ser explícito sobre los tipos de datos, lo que hace que el código sea más fácil de entender y mantener.
Consistencia: Evita comportamientos inesperados debido a conversiones automáticas de tipos de datos.
Limitaciones
Incompatibilidad con algunos códigos existentes: El uso de declare(strict_types=1); puede romper código existente que depende de las conversiones automáticas de tipos.
Mayor rigidez: Requiere que el desarrollador sea más cuidadoso al definir y pasar tipos de datos.
En resumen, declare(strict_types=1); fuerza una verificación estricta de los tipos de datos en el archivo en el que se declara, mejorando la seguridad y claridad del código a costa de una mayor rigidez en el manejo de tipos.
*/
include 'includes/header.php';


// Definimos una función llamada 'sumar' que acepta dos parámetros:
// $numero1 de tipo int con un valor por defecto de 0
// $numero2 de tipo int
function sumar(int $numero1 = 0, int $numero2 ) {
    // Imprimimos la suma de $numero1 y $numero2
    echo $numero1 + $numero2;
}

// Llamada a la función 'sumar' con el primer parámetro como 10 y el segundo parámetro como 0 (valor por defecto)
sumar(10, 0);

// Llamada a la función 'sumar' usando parámetros nombrados
// $numero2 se asigna a 10 y $numero1 se asigna a 20
sumar(numero2: 10, numero1: 20); // parámetros nombrados

include 'includes/footer.php';