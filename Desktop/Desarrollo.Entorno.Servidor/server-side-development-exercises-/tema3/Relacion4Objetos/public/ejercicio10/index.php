<?php
require_once __DIR__ . '/Persona.php';
$persona = new Persona("Paco",66,"Madrid");
//El metodo 'getNombre' no existe, asi que PHP llama al metodo __call(`getNombre`,[])
echo 'Nombre: '. $persona->getNombre() . '<br>';
// El método 'getEdad' no existe, así que PHP llama a _ call('getEdad', []) 
echo 'Edad: '.$persona->getEdad() . '<br>';
// El método 'getCiudad' no existe, así que PHP llama a _ call('getCiudad', []) 
echo 'Ciudad: '. $persona->getCiudad() . '<br>';
// El método 'getHOLA' no existe, PHP llama a call('getHOLA', [])
// _call no encontrará la propiedad 'hola', por lo que devuelve el error. 
echo $persona->getHOLA();
?>