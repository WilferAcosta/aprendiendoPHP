<?php

// Clase abstracta
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

// Interfaz
interface CanFly {
    public function fly();
}

// Clase que implementa la interfaz y extiende la clase abstracta
class Bird extends Animal implements CanFly {
    public function makeSound() {
        echo "Chirp Chirp";
    }

    public function fly() {
        echo "Flying high";
    }
}

// Uso de la clase Bird
$bird = new Bird("Sparrow");
$bird->makeSound(); // Output: Chirp Chirp
$bird->fly(); // Output: Flying high

?>