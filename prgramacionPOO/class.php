<?php

    
        declare(strict_types = 1);
        class Humano{
            public function __construct(public string $color, private float $huella, protected string $alias,protected string $saludar){}
            protected function saludar(){
                return "hola como esta ".$this->alias;
            }
            public function __set(string $name, mixed $value){
                $this->{$name}=$value;
            }
            public function __get(string $name){
                return method_exists($this, $name) ? $this->{$name}():$this->{$name};
            }
        }
    //parametro es el nombre de la variable y argumento es el valor de la variable.
    $extruct = array(
        "color"=>"red",
        "huella"=>45.4,
        "alias"=>"Wilfer",
        "saludar"=>"hola mundo"
    );
    $obj = new Humano(...$extruct);
    $pbj->__set("alias","WILFER");
    print($obj);

    print_r($obj->__get("saludar"));

?>