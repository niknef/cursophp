<?php

declare(strict_types=1);


function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
};

function get_until_message(int $days_until): string
{
    return match (true){
        $days_until === 0   => "Hoy",
        $days_until === 1   => "Mañana",
        default             => "En $days_until días",
     
    };
};






?>