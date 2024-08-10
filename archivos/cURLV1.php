<?php
    //Curl es la forma mas facil de llamar a la api de marvel   

#Inicializamos una nueva sesión cURL; ch = curl handle
const API_URL = "https://www.whenisthenextmcufilm.com/api";

//Inicializa una nueva sesión cURL y devuelve un manejador cURL para usar con las funciones cURL.
$ch = curl_init(API_URL); 

//Idicamos que queremos recibir la info y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutamos la peticion y guardamos el resultado

$result = curl_exec($ch);

//Otra alternativa es utilizar file_get_contents
//$result = file_get_contents(API_URL);
$data = json_decode($result, true); //Decodifica un string de JSON
curl_close($ch); //Cierra una sesión cURL

//picocss es un framework de css que se puede utilizar para darle estilo a la pagina

?>
<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La proxima pelicula de marvel">
    <!-- Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>
<main>
    <pre style="font-size: 10px; overflow:scroll; height:250px;">
        <?php
            var_dump($data);
        ?>
    </pre>
    <section>
        <h2>La próxima pelicula de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?></h2>
        <h3>Se estrena en: <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>

        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>
<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
        margin: 0;
    }
    section{
        display: flex;
        flex-direction: column;
        justify-content: center;
        
    }
    
    h2
    {
        text-align: center;
    }
    img{
        margin: 0 auto;
    }

    hgroup{
        display: flex;
        flex-direction: column;        
        text-align: center;
        justify-content: center;
    }
    </style>