<?php include 'includes/header.php';
// Definimos dos variables booleanas para determinar la autenticación y el estado de administrador
$autenticado = true;
$admin = false;

// Condicional IF que verifica si el usuario está autenticado o es administrador
if($autenticado || $admin){
    echo "El usuario esta autenticado"; // Se imprime si alguna de las condiciones es verdadera
} else {
    echo "El usuario no esta autenticado"; // Se imprime si ninguna de las condiciones es verdadera
}

// Definimos un arreglo asociativo que representa a un cliente
$cliente = [
    'nombre' => 'Juan', // Nombre del cliente
    'saldo' => 200, // Saldo del cliente
    'informacion' => [
        'tipo' => 'Premium' // Tipo de cliente
    ]
];

// IF anidados
if(!empty($cliente)){
    // Verifica si el arreglo de cliente no está vacío
    echo "El arreglo de cliente no esta vacio";

    if($cliente['saldo'] > 0){
        // Verifica si el saldo del cliente es mayor a 0
        echo "El cliente tiene saldo";
    } else {
        // Se ejecuta si el saldo del cliente no es mayor a 0
        echo "No hay saldo";
    }
} else {
    // Se ejecuta si el arreglo de cliente está vacío
    echo "No hay cliente";
}

// ELSE IF para verificar diferentes condiciones del cliente
if($cliente['saldo'] > 0){
    // Verifica si el saldo del cliente es mayor a 0
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium'){
    // Verifica si el cliente es de tipo Premium
    echo "El cliente es premium";
} else {
    // Se ejecuta si ninguna de las condiciones anteriores es verdadera
    echo "No hay cliente";
}

// Switch para verificar el valor de la variable tecnologia
$tecnologia = "PHP";

switch($tecnologia){
    case 'PHP':
        echo "PHP, un excelente lenguaje"; // Se ejecuta si la tecnología es PHP
        break;
    case 'JavaScript':
        echo "Excelente lenguaje de frontend"; // Se ejecuta si la tecnología es JavaScript
        break;
    case 'HTML':
        echo "No es un lenguaje de programación"; // Se ejecuta si la tecnología es HTML
        break;
    default:
        echo "Cualquier otra cosa"; // Se ejecuta si la tecnología no coincide con ninguno de los casos anteriores
        break;
}

include 'includes/footer.php';