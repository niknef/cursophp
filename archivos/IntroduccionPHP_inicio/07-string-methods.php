<?php include 'includes/header.php';

 // Declaración de una variable con el nombre $nombreCliente
 $nombreCliente = "Pedro"; 

 // Conocer la extensión de un string
 // Imprime la longitud del string $nombreCliente usando strlen
 echo strlen($nombreCliente); 
 
 echo "<br>";

 // Imprime información detallada sobre la variable $nombreCliente
 var_dump($nombreCliente); 
 
 echo "<br>";

 // Eliminar espacios en blanco
 // Usa trim para eliminar espacios en blanco al inicio y al final del string
 $texto = trim($nombreCliente); 
 
 // Imprime la longitud del string $texto usando strlen
 echo strlen($texto); 
 
 echo "<br>";

 // Convertir el string a mayúsculas
 // Imprime el string $nombreCliente en mayúsculas usando strtoupper
 echo strtoupper($nombreCliente); 
 
 echo "<br>";

 // Convertir el string a minúsculas
 // Imprime el string $nombreCliente en minúsculas usando strtolower
 echo strtolower($nombreCliente); 
 
 echo "<br>";

 // Declaración de dos variables con direcciones de correo electrónico
 $mail1 = "correo@correo.com"; 
 $mail2 = "Correo@correo.com"; 

 // Comparar dos strings ignorando mayúsculas y minúsculas
 // Imprime el resultado de comparar $mail1 y $mail2 en minúsculas usando var_dump
 var_dump(strtolower($mail1) === strtolower($mail2)); 
 
 echo "<br>";

 // Reemplazar parte de un string con otro string
 // Reemplaza 'Juan' con 'J' en el string $nombreCliente y lo imprime usando str_replace
 echo str_replace('Juan', 'J', $nombreCliente); 
 
 echo "<br>";

 // Revisar si un string existe dentro de otro string
 // Imprime la posición de la primera aparición de 'Pedro' en $nombreCliente usando strpos
 echo strpos($nombreCliente, 'Pedro'); 
 
 echo "<br>";

 // Declaración de una variable con el tipo de cliente
 $tipoCliente = "Premium"; 

 echo "<br>";

 // Concatenar strings usando el operador de concatenación (.)
 // Imprime una cadena concatenada usando el operador . para combinar varios strings
 echo "El Cliente " . $nombreCliente . " es " . $tipoCliente; 
 
 echo "<br>";

 // Concatenar strings usando la sintaxis de llaves
 // Imprime una cadena concatenada usando llaves para insertar variables dentro de la cadena
 echo "El Cliente {$nombreCliente} es ${tipoCliente} "; 

include 'includes/footer.php';