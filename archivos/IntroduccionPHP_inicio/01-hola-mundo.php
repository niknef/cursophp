<?php include 'includes/header.php'; ?>

<?php echo "hola Mundo"; ?> 

<br>


<?php echo("Hola Mundo");// Imprime "Hola Mundo" usando la función echo con paréntesis


 // Imprime "Hola Mundo" usando la función print con paréntesis
 print("Hola Mundo");

 // Imprime "Hola Mundo" usando la función print sin paréntesis
 print "Hola Mundo";

 // Imprime "Hola Mundo" usando la función print_r
 print_r("Hola Mundo");

 // Imprime información detallada de la variable, incluyendo su tipo y valor
 var_dump("Hola Mundo");

/* 
Esta es otra forma de usar echo, esta vez con paréntesis. Funciona igual que la anterior y también imprime "Hola Mundo".

print es otra función en PHP para imprimir texto. En este caso, imprime "Hola Mundo" y se usa con paréntesis, pero estos son opcionales.

print_r es una función que se usa comúnmente para imprimir estructuras de datos como arrays, pero también puede imprimir cadenas de texto. En este caso, imprime "Hola Mundo".

var_dump es una función que imprime información detallada sobre una variable, incluyendo su tipo y valor. Aquí, imprime string(10) "Hola Mundo", indicando que la variable es una cadena de texto (string) con 10 caracteres.

*/

include 'includes/footer.php'; ?>