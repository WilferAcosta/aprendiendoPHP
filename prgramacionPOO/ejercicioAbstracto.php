<?php   
abstract class CuentaBancaria {
    protected $saldo;

    public function __construct($saldo = 0) {
        $this->saldo = $saldo;
    }

    abstract public function depositar($monto);
    abstract public function retirar($monto);
}
class CuentaCorriente extends CuentaBancaria {
    public function depositar($monto) {
        $this->saldo += $monto;
        echo "Deposito en Cuenta Corriente: $monto. Saldo actual: $this->saldo\n";
    }

    public function retirar($monto) {
        $cargoPorSobregiro = 0;
        if ($this->saldo < $monto) {
            $cargoPorSobregiro = $monto * 0.10; 
        }

        $this->saldo -= ($monto + $cargoPorSobregiro);
        echo "Retiro en Cuenta Corriente: $monto. Cargo por sobregiro: $cargoPorSobregiro. Saldo actual: $this->saldo\n";
    }
}
class CuentaAhorros extends CuentaBancaria {
    public function depositar($monto) {
        $this->saldo += $monto;
        echo "Deposito en Cuenta de Ahorros: $monto. Saldo actual: $this->saldo\n";
    }

    public function retirar($monto) {
        if ($this->saldo < $monto) {
            echo "Fondos insuficientes para retirar $monto en Cuenta de Ahorros. Saldo actual: $this->saldo\n";
        } else {
            $this->saldo -= $monto;
            echo "Retiro en Cuenta de Ahorros: $monto. Saldo actual: $this->saldo\n";
        }
    }
}
$cuentaCorriente = new CuentaCorriente();
$cuentaCorriente->depositar(500);
$cuentaCorriente->retirar(600);  

$cuentaAhorros = new CuentaAhorros();
$cuentaAhorros->depositar(500);
$cuentaAhorros->retirar(600); 

?>