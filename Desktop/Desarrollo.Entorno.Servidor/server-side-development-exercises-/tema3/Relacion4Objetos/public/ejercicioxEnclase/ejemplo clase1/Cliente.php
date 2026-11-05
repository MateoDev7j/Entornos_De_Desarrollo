<?php
require_once __DIR__ . "/src/Persona.php";
class Cliente extends Persona{
    private string $codigo;

    public function __construct(string $nombre, string $apellido)
    {
        return parent::__construct($nombre, $apellido);
        $this->codigo=$codigo;
    }
    public function getCodigo($codigo){
        return $this->$codigo;
    }
}
$cliente = new Cliente("Mateo","Ortuño","777");
$cliente->getNombre();

?>