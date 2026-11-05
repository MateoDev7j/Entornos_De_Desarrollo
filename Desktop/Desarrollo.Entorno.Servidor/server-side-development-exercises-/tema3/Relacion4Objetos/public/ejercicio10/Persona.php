<?php
class Persona{
    public function __construct(
        private string $nombre,
        private int $edad,
        private string $ciudad
    ){}
    public function __call(string $nombre, array $argumentos): mixed{
        return "El método '{$nombre}' no existe en la clase " . self::class;
    }
}

?>