<?php 
declare(strict_types=1);
include 'includes/header.php';
// Definimos una función llamada 'usuarioAutenticado' que acepta un parámetro booleano $autenticado
// La función retorna un valor de tipo string o null
function usuarioAutenticado(bool $autenticado) : ?string {
    // Verificamos si $autenticado es true
    if($autenticado) {
        // Si $autenticado es true, retornamos el mensaje "El Usuario esta autenticado"
        return "El Usuario esta autenticado";
    } else {
        // Si $autenticado es false, retornamos null
        return null;
    }
}

// Llamamos a la función 'usuarioAutenticado' pasando false como argumento
$usuario = usuarioAutenticado(false);
// Imprimimos el valor retornado por la función 'usuarioAutenticado'
echo $usuario;

include 'includes/footer.php';