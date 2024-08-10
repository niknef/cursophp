<?php
//un clase es una plantilla para crear objetos. Un objeto es una instancia de una clase. 


//PRGRAMACION ORIENTADA A OBJETOS

class SuperHero {
    //Propiedades y los metodos
    public $name;
    public $powers;
    public $planet;
    public $level;

    public function __construct($name, $powers, $planet){
        $this->name = "Sin nombre";
        $this->powers = "Sin poderes";
        $this->planet = "Sin planeta";
        $this->level = 0;
    }

    public function attack(){
        return "¡$this->name está atacando!";

    }

    public function description(){
        return "$this->name es de $this->planet y tiene los siguientes poderes: $this->powers";
    }

}; 
declare(strict_types=1);

class SuperHeroDos {
    
    //promoted properties
    public function __construct(
        private string $name, 
        public array $powers, 
        public string $planet){}

    public function attack(){
        return "¡$this->name está atacando!";

    }

    public function show_all(){
        return get_object_vars($this); //devuelve todas las propiedades de un objeto
    }

    public function description(){
        $powers = implode(", ", $this->powers);//convierte un array en un string
        return "$this->name es de $this->planet y tiene los siguientes poderes: $powers";
    }

    //metodo estatico
    public static function random(){
        $names = ["Superman", "Batman", "DeadPool"];
        $powers = [
            ["Volar", "rayos x", "super fuerza"],
            ["Dinero", "tecnología", "inteligencia"],
            ["Regeneración", "agilidad", "fuerza"]
        ];
        $planet = ["Krypton", "Gotham", "X-Force"];

        $name = $names[array_rand($names)]; //array_rand() devuelve un indice aleatorio de un array
        $powers = $powers[array_rand($powers)];
        $planet = $planet[array_rand($planet)];

        echo "Creando un nuevo superheroe: $name\n";
    }

};

SuperHeroDos::random(); //llamando a un metodo estatico
// $hero = new SuperHero();
// $hero->name = "Superman";
// $hero->powers = "Volar, rayos x, super fuerza";
// $hero->planet = "Krypton";

$hero = new SuperHero("Superman", ["Volar", "rayos x", "super fuerza"], "Krypton");


?>