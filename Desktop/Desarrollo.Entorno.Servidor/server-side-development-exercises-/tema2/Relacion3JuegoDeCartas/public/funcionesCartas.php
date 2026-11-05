<?php
//Creamos la funcion para crear la bajara de cartas
function crearBaraja() {
    $palos = ['oros', 'copas', 'espadas', 'bastos'];
    $baraja = [];
    
    foreach ($palos as $palo) {
        for ($i = 1; $i <= 12; $i++) {
            if ($i != 8 && $i != 9) { 
                $baraja[] = [
                    'palo'   => $palo,
                    'valor'  => $i,
                    'nombre' => $palo . '_' . $i
                ];
            }
        }
    }
    return $baraja;
}
function crearBarajaCompleta(){
    $palos = ['oros', 'copas', 'espadas', 'bastos'];
    $baraja = [];
    
    foreach ($palos as $palo) {
        foreach (range(1, 12) as $numero) {
            // Creamos un array fijo para cada carta
            $baraja[] = [
                'palo'   => $palo,
                'valor'  => $numero,
                'nombre' => $palo . '_' . $numero // Ejemplo: "oros_1"
            ];
        }
    }
    return $baraja;
}
function barajarBaraja(&$baraja):void{
    shuffle($baraja);
}
function sacarCarta(&$baraja) {
    return array_shift($baraja);
}
function mostrarCarta($carta): void {
    $rutaImagen = 'imagenes/' . $carta['nombre'] . '.jpg';
    echo '<img src="' . $rutaImagen . '" alt="Carta">';
    //echo "<br>";
    echo '<h2>Esta es la carta '.$carta['nombre'].'</h2>';
    echo '<br>';
}
function mostrarBarja(&$baraja): void{
    foreach($baraja as $carta){
        mostrarCarta($carta);
    }
}
?>