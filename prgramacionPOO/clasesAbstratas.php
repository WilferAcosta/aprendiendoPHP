<?php
/*
*En esta parte, estamos definiendo una clase abstracta llamada Animal. 
?La palabra clave abstract indica que esta clase no se puede instanciar directamente, 
?sino que se utiliza como una clase base para otras clases derivadas.
/
abstract class Animal {
    /
    *El constructor construct tiene tres parámetros: 
    ?$nombre, $apellido y $edad. 
    ?Estos parámetros son marcados como private y protected para que solo sean accesibles dentro de la clase. 
    *El constructor asigna los valores proporcionados a las propiedades correspondientes utilizando el operador de asignación.
     */
    public function construct(private string $nombre, private string $apellido, protected int $edad ) {
        $this->setEdad($edad); 
    };
    /*
    *Aquí declaramos un método abstracto llamado sonidoAnimal(). 
    ?Al ser abstracto, cualquier clase derivada de Animal debe implementar este método.
    /
    abstract public function sonidoAnimal();

    /
    *En la clase Animal, los métodos mágicos get() y set() 
    ?son utilizados para acceder y asignar valores a las propiedades privadas y protegidas de la clase. 
    *Estos métodos son invocados automáticamente cuando intentamos acceder a una propiedad inaccesible o asignarle un valor.
    /

    /
    ?El método get($property) verifica si la propiedad $property existe en la instancia actual utilizando la función property_exists(). 
    Si la propiedad existe, se devuelve su valor. De lo contrario, se devuelveno existe*.
    */
    public function get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return "No existe";
    };

    /*
    ?El método set($property, $value) verifica si la propiedad $property existe en la instancia actual utilizando la función property_exists(). 
    *Si la propiedad existe, se le asigna el valor $value.
    */
    public function set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    };


    public function setEdad($edad) {
        if (is_numeric($edad) && $edad > 0) {
            $this->edad = $edad;
        } else {
            // Si el valor no es un número válido, asignamos un valor predeterminado
            $this->edad = 1;
        }
    };


class Perro extends Animal {
    public function sonidoAnimal() {
        return "Guau Guau Guau!";
    }
}

class Gato extends Animal {
    public function sonidoAnimal() {
        return "Miau Miau Miau!";
    }
}


$perro = new Perro("Sheila","Cubides",32);
$perro2=new Perro("papu","pincher",-60);
$gato = new Gato("Angel","Ramirez",20);


echo "El perro: " . $perro->nombre . " " . $perro->apellido . " tiene una edad de " . $perro->edad . " y hace el sonido:  " . $perro->sonidoAnimal() . "<br>";
echo "El gato: " . $gato->nombre . " " . $gato->apellido . " tiene una edad de " . $gato->edad . " y hace el sonido:  " . $gato->sonidoAnimal() . "<br>";
echo "El perro2: " . $perro2->nombre . " " . $perro2->apellido . " tiene una edad de " . $perro2->edad . " y hace el sonido:  " . $perro2->sonidoAnimal() . "<br>";

?>