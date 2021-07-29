<?php

class Poisson {
    
    public $name;

    private $color;

    private int|float $childs;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor(?string $color){
        $this->color = $color;
    }

    public function getNbChilds(float|int $bar): int|float {
        return $bar ** 2 + rand(0, 200);
    }
}

$poissonBallon = new Poisson("poisson-lune");

$poissonLune = new Poisson("poisson-lune");

if ($poissonBallon == $poissonLune) {
    echo "Les deux poissons sont identiques";
}