<?php

//require "functions.php"; //Incluye y evalúa el archivo especificado
require_once "consts.php"; //Incluye y evalúa el archivo especificado una sola vez
require_once "functions.php"; //Incluye y evalúa el archivo especificado una sola vez

//include_once "functions.php"; //Incluye y evalúa el archivo especificado, si no encuentra el archivo solo da un warning

$data = get_data(API_URL);
$daysMessage = get_until_message($data["days_until"]);
//picocss es un framework de css que se puede utilizar para darle estilo a la pagina

?>

<?php require "sections/head.php"; ?>
<?php require "sections/main.php"; ?>
<?php require "sections/styles.php"; ?>