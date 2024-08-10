<?php

require_once "consts.php"; 
require_once "functions.php"; 
require_once "classes/NextMovie.php";

$next_movie = NextMovie::fetch_and_create_movie(API_URL); // NextMovie::fetch_and_create_movie(API_URL) es una llamada a un método estático de la clase NextMovie que se encuentra en la ruta classes/NextMovie.php. Este método estático recibe un argumento de tipo string y devuelve un objeto de tipo NextMovie. En este caso, el argumento es la constante API_URL que se encuentra en la ruta proyecto1/consts.php.
$next_movie_data = $next_movie->get_data(); // $next_movie->get_data() es una llamada a un método de la clase NextMovie que se encuentra en la ruta classes/NextMovie.php. Este método no recibe argumentos y devuelve un array asociativo con las propiedades del objeto NextMovie.
?>

<?php render_template("head"); ?>
<?php render_template ("main", array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()]
    )); ?>
<?php render_template("styles"); ?>