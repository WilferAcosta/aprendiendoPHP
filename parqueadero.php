<!-- Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases y interfaces.

El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().

Además, necesitamos una interfaz ParqueaderoInterface que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).

Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.

Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta. -->

<?php

abstract class Vehiculo{
    
    public function __construct(protected int $placa=0){
    }
    abstract function getType();
}

class coche extends Vehiculo{
    public function getType(){
        return "coche";
    }
}
class motocicleta extends Vehiculo{
    public function getType(){
        return "motocicleta";
    }
}
interface ParqueaderoInterface{
    public function estacionar(Vehiculo $vehiculo):void;
    public function retirar(Vehiculo $vehiculo):void;
}
class Parqueadero implements ParqueaderoInterface {
    private array $vehiculos;

    public function estacionar(Vehiculo $vehiculo): void {
        $this->vehiculos[] = $vehiculo;
        echo $vehiculo->getType() . ' estacionado/a en el parqueadero.' . PHP_EOL;
    }

    public function retirar(Vehiculo $vehiculo): void {
        $index = array_search($vehiculo, $this->vehiculos);
        if ($index !== false) {
            unset($this->vehiculos[$index]);
            echo $vehiculo->getType() . ' retirado/a del parqueadero.' . PHP_EOL;
        } else {
            echo $vehiculo->getType() . ' no encontrado/a en el parqueadero.' . PHP_EOL;
        }
    }
}


?>