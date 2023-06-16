<!-- Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases y interfaces.

El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().

Además, necesitamos una interfaz ParqueaderoInterface que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).

Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.

Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta. -->

<?php

abstract class Vehiculo {
    protected int $placa;

    public function __construct(int $placa) {
        $this->placa = $placa;
    }

    abstract public function getType(): string;
}

class Coche extends Vehiculo {
    public function getType(): string {
        return "carro";
    }
}

class Motocicleta extends Vehiculo {
    public function getType(): string {
        return "moto";
    }
}

interface ParqueaderoInterface {
    public function estacionar(Vehiculo $vehiculo): void;
    public function retirar(Vehiculo $vehiculo): void;
}

class Parqueadero implements ParqueaderoInterface {
    private array $vehiculos;

    public function estacionar(Vehiculo $vehiculo): void {
        $this->vehiculos[] = $vehiculo;
        echo $vehiculo->getType() . ' estacionado en el parqueadero.' . PHP_EOL;
    }

    public function retirar(Vehiculo $vehiculo): void {
        $index = array_search($vehiculo, $this->vehiculos);
        if ($index !== false) {
            unset($this->vehiculos[$index]);
            echo $vehiculo->getType() . ' retirado del parqueadero.' . PHP_EOL;
        } else {
            echo $vehiculo->getType() . ' no encontrado en el parqueadero.' . PHP_EOL;
        }
    }
}

// Recibir los datos de la solicitud POST
$_DATA = json_decode(file_get_contents("php://input"), true);

// Verificar si se recibieron los datos correctamente
if (!empty($_DATA) && isset($_DATA["placasCoche"]) && isset($_DATA["placasMotocicleta"])) {
    // Crear una instancia de Parqueadero
    $parqueadero = new Parqueadero();

    // Estacionar los coches
    foreach ($_DATA["placasCoche"] as $placaCoche) {
        $coche = new Coche($placaCoche);
        $parqueadero->estacionar($coche);
    }

    // Estacionar las motocicletas
    foreach ($_DATA["placasMotocicleta"] as $placaMotocicleta) {
        $motocicleta = new Motocicleta($placaMotocicleta);
        $parqueadero->estacionar($motocicleta);
    }
    //retirar vehiculos
    foreach ($_DATA["placasCoche"] as $placaCoche) {
        $coche = new Coche($placaCoche);
        $parqueadero->retirar($coche);
    }
    
    foreach ($_DATA["placasMotocicleta"] as $placaMotocicleta) {
        $motocicleta = new Motocicleta($placaMotocicleta);
        $parqueadero->retirar($motocicleta);
    }

} else {
    echo "Error: Datos de entrada incorrectos.";
}

?>