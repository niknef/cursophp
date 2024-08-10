<?php

//php es de tipado tipico, dinamico y gradual
//Establece el modo estricto de tipos   
declare(strict_types=1); 

const API_URL = "https://www.whenisthenextmcufilm.com/api";

function get_data(string $url): array //Funcion que recibe un string y devuelve un array 
{
    $result = file_get_contents($url); 
    $data = json_decode($result, true); //Decodifica un string de JSON
    return $data;
};

function get_until_message(int $days_until): string //Funcion que recibe un entero y devuelve un string
{
    return match (true){
        $days_until === 0   => "Hoy",
        $days_until === 1   => "Mañana",
        default             => "En $days_until días",
     
    };
};

$data = get_data(API_URL);
$daysMessage = get_until_message($data["days_until"]);
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

    <section>
        <h2>La próxima pelicula de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?></h2>
        <h3><?= $daysMessage ?> días</h3>
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