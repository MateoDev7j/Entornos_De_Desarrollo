<?php
class Cuenta{
    // 1. Saldo: no puede ser negativo. Si intentan meter un negativo, se lanza una excepción.
    public float $saldo {
        set {
            if ($value < 0) {
                throw new InvalidArgumentException("El saldo no puede ser negativo.");
            }
            $this->saldo = $value;
        }
    }
    // 2. Titular: se limpia con trim() y se aplica ucwords() automáticamente al asignarse.
    public string $titular {
        set => $this->titular = ucwords(trim($value));
    }
    // 3. SaldoFormateado (VIRTUAL): No almacena datos. Solo tiene un 'get' que transforma el saldo real.
    public string $saldoFormateado {
        get => number_format($this->saldo, 2, ',', '.') . " €";
    }
}
// ==========================================
// EJEMPLO DE USO PRÁCTICO
// ==========================================

$miCuenta = new Cuenta();

// Probando el setter de Titular (quita espacios y pone mayúsculas)
$miCuenta->titular = "   juan pérez gartzia   ";
echo "Titular: " . $miCuenta->titular . "\n"; // Imprime: Juan Pérez Gartzia

// Probando el setter de Saldo
$miCuenta->saldo = 1250.50;

// Probando la propiedad VIRTUAL saldoFormateado
echo "Saldo Formateado: " . $miCuenta->saldoFormateado . "\n"; // Imprime: 1.250,50 €

// Descomenta la siguiente línea para ver cómo falla si intentas poner saldo negativo:
// $miCuenta->saldo = -100; // Lanza una excepción

?>