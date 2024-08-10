<?php

declare(strict_types=1);

class NextMovie
{
    public function __construct(
        private int $days_until,
        private string $title,
        private string $release_date,
        private string $following_production,
        private string $poster_url,
        private string $overview,
    )
    {

    }
    public function get_until_message(): string
    {
        $days = $this->days_until;
        return match (true){
            $days === 0   => "Hoy",
            $days === 1   => "Mañana",
            default             => "En $days días",
        
        };
    }

    public static function fetch_and_create_movie($api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);
        
        return new self(
            $data["days_until"],
            $data["title"],
            $data["release_date"],
            $data["following_production"]["title"]?? "No hay datos",
            $data["poster_url"],
            $data["overview"],
        );
    }

    public function get_data(){
        return get_object_vars($this);
    }
    
}

?>