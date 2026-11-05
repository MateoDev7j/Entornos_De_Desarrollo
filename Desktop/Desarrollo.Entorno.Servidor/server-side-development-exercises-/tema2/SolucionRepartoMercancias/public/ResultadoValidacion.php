<?php
declare(strict_types=1);
enum ResultadoValidacion: string{
    case OK = "ok";
    case SIN_STOCK = "sin stock";
    case NO_CABE = "no cabe";
}
?>