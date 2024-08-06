
<?php
    $name = "Miguel"; // Variable de tipo string
    $isDev = true; // Variable de tipo boolean
    $age = 20; // Variable de tipo integer

    //php es de tipado dinamico debil y gradual

    var_dump($name); // esto se utiliza para saber cual es el tipo de dato y el valor de dato de la variable

    gettype($name); // esto se utiliza para saber el tipo de dato de la variable

    $output = "Hello, my name is $name and I'm $age years old"; // Concatenacion de variables

    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png'); // Constante global

    const NOMBRE = "Miguel"; // Constante global

    $isOld = $age > 18; // Operador ternario

    $outputAge = match($age){
        0, 1, 2 => "Eres un bebe",
        3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño",
        11, 12, 13, 14, 15, 16, 17 => "Eres un adolescente",
        18, 19, 20, 21, 22, 23, 24, 25 => "Eres un joven",
        default => "Eres un adulto"
    }; // Match expression

    $outputAgeDos = match(true){
        $age <= 2 => "Eres un bebe",
        $age <= 10 => "Eres un niño",
        $age <= 17 => "Eres un adolescente",
        $age <= 25 => "Eres un joven",
        default => "Eres un adulto"
    };
    
    $bestLanguages = ["PHP", "JavaScript", "Python", "Java", "C#"]; // Array
    $bestLanguages[] = "Ruby"; // Agregar un elemento al array
    $bestLanguages[1] = "TypeScript"; // Modificar un elemento del array
    unset($bestLanguages[4]); // Eliminar un elemento del array

    foreach($bestLanguages as $language){
        echo "<h2>$language</h2>";
    } // Foreach loop

    foreach ($bestLanguages as $key => $language) {
        echo "<h2>$key - $language</h2>";
    } // Foreach loop con key

    $person = [
        "name" => "Miguel",
        "age" => 20,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python", "Java", "C#"]
    ]; // Array asociativo	
?>

<?php if ($isOld) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>Eres desarrollador</h2>
<?php else : ?>
    <h2>Eres joven</h2>
<?php endif; ?>





<h1>
    <?=  $output ?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>