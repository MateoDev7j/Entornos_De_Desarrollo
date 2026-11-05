<?php

echo '<h1>Proyecto: Relacion3Arrays</h1>';
echo '<p>PHP ' . phpversion() . '</p>';
//1. Operaciones básicas
// Primero definimos la función solicitada para mostrar el array
function mostrarArray(array $lista): void {
    foreach ($lista as $numero) {
        echo $numero . " ";
    }
    echo "<br><br>"; // Saltos de línea para que se vea limpio en el navegador
}
//Escribe un script que almacene un array de 8 números enteros. El programa debe realizar de manera secuencial las siguientes operaciones:
$numeros = [];
for($i = 0; $i < 8; $i++) {
    $numeros[$i] = rand(1, 100);
}
//a.recorrer el array y mostrar sus elementos por pantalla
mostrarArray($numeros);
//b.ordenar  de menor a mayor y volver a mostrarlo.    
sort($numeros);
mostrarArray($numeros);
//c.Calcular y mostrar en pantalla su longitud total (número de elementos).
$length = count($numeros);
echo "Longitud total del array: $length<br><br>";
//d.Buscar un elemento concreto dentro del array de forma estática informando si existe o no.
$elementoBuscarEstatico = 16;

// in_array() devuelve true si el elemento existe dentro del array
if (in_array($elementoBuscarEstatico, $numeros)) {
    echo "El número $elementoBuscarEstatico SI existe en el array.<br>";
} else {
    echo "El número $elementoBuscarEstatico NO existe en el array.<br>";
}
//e.Modificar la búsqueda para que el elemento a localizar se reciba de manera dinámica por la URL empleando parámetros GET.
// Para probar esto en tu navegador, añade al final de la URL: ?buscar=42
// Ejemplo: http://localhost/tu_script.php?buscar=42

// isset() comprueba si el parámetro 'buscar' existe en la URL
if (isset($_GET['buscar'])) {
    // Convertimos a entero (int) por seguridad
    $elementoBuscarDinamico = (int)$_GET['buscar']; 
    
    if (in_array($elementoBuscarDinamico, $numeros)) {
        echo "El número $elementoBuscarDinamico SI existe en el array.";
    } else {
        echo "El número $elementoBuscarDinamico NO existe en el array.";
    }
} else {
    echo "Por favor, introduce un número en la URL usando el parámetro GET. Ejemplo: <code>?buscar=16</code>";
}
//Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray().

//2. Relleno automático
//Desarrolla un script que añada de forma automática valores numéricos enteros a un
//array utilizando un bucle (mientras su longitud sea inferior a 120 elementos).
$numerosAutomaticos = [];
while (count($numerosAutomaticos) < 120) {
    $numerosAutomaticos[] = rand(1, 1000); 
}
//Una vez rellenado, muestra el contenido completo del array por pantalla.
function mostrarArrayCompleto(array $array): void {
    foreach ($array as $numero) {
        echo $numero . " ";
    }
    echo "<br><br>";
}
echo "<br><br>";
mostrarArrayCompleto($numerosAutomaticos);
//3. Cuadrado y cubo
//Escriba un script PHP que:
//Guarde en un array 20 valores aleatorios entre 0 y 100.
$numeros20 = [];
while (count($numeros20) < 20) {
    $numeros20[] = rand(0, 100);
}
//En un segundo array, llamado cuadrados, deberá almacenar los cuadrados de los valores que hay en el primer array.
$cuadrados = [];
foreach ($numeros20 as $numero) {
    $cuadrados[] = $numero * $numero;
}

//En un tercer array, llamado cubo, se deben almacenar los cubos de los valores que hay en el primer array.
$cubo = [];
foreach ($numeros20 as $numero) {
    $cubo[] = $numero * $numero * $numero;
}
//Por último, se mostrará el contenido de los tres arrays dispuesto en tres columnas paralelas.
function mostrarArraysEnColumnas(array $array1, array $array2, array $array3): void {
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
    echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
    for ($i = 0; $i < count($array1); $i++) {
        echo "<tr>";
        echo "<td>{$array1[$i]}</td>";
        echo "<td>{$array2[$i]}</td>";
        echo "<td>{$array3[$i]}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
mostrarArraysEnColumnas($numeros20, $cuadrados, $cubo);
//4. Operaciones aritméticas
//Crea dos arrays independientes con el mismo tamaño 
//(especificado mediante una constante). Rellena el primer array con los números enteros del 1 al N, y el segundo con los números en orden inverso (desde N hasta 1).
const N = 10; 
$array1 = range(1, N);
$array2 = range(N, 1);
//Diseña un algoritmo que recorra ambos arrays
//simultáneamente y genere un tercer array donde cada posición sea el resultado de sumar los elementos equivalentes de los dos arrays anteriores.
function sumarArrays(array $array1, array $array2): array {
    $resultado = [];
    for ($i = 0; $i < count($array1); $i++) {
        $resultado[] = $array1[$i] + $array2[$i];
    }
    return $resultado;
}
echo "<h3>Suma de los arrays:</h3>";
print_r(sumarArrays($array1, $array2));
//5. Complementario
//Escribe un script que rellene un array con valores aleatorios (0,1)
//y lo muestre. A continuación, calcularemos su complementario y también la mostraremos.


/*6. Arrays asociativos
a) Crea un array asociativo (o diccionario) con el censo de poblacion 
de: Espayaa, Portugal, Francia, Italia y Grecia. 
b) Define un array asociativo cuyas claves sean palabras en castellano
y sus valores correspondientes sean las traducciones de dichas palabras en ingles.
Genera de forma dinamica, a partir del array, una tabla HTML limpia que muestre el 
diccionario de sinonimos de manera ordenada en dos columnas.
*/
// a) Array asociativo con el censo de población
$censoPoblacion = [
    "España"   => 48000000,
    "Portugal" => 10300000,
    "Francia"  => 68000000, 
    "Italia"   => 58900000,
    "Grecia"   => 10400000
];
// b) Array asociativo: Claves en castellano -> Valores en inglés
$diccionario = [
    "Hola"   => "Hello",
    "Bueno"  => "Good",
    "Adiós"  => "Bye",
    "Mente"  => "Mind"
];
// Generar la tabla HTML dinámicamente
echo '<table border="1" style="border-collapse: collapse; text-align: left;">';
echo '  <thead>';
echo '    <tr>';
echo '      <th>Español</th>';
echo '      <th>Inglés</th>';
echo '    </tr>';
echo '  </thead>';
echo '  <tbody>';

// Usamos SOLO foreach para recorrer las filas
foreach ($diccionario as $espanol => $ingles) {
    echo '    <tr>';
    echo "      <td>$espanol</td>";
    echo "      <td>$ingles</td>";
    echo '    </tr>';
}

echo '  </tbody>';
echo '</table>';
/* ************************************************
***************************************************
**************************************************/
echo '<h1>Ejercicio 7: Borrado de Provincias</h1>';

// 1. Creamos el array con las 8 provincias de Andalucía
// Los índices automáticos van del 0 al 7
$provincias = [
    "Almería",    // Índice 0
    "Cádiz",      // Índice 1
    "Córdoba",    // Índice 2
    "Granada",    // Índice 3
    "Huelva",     // Índice 4
    "Jaén",       // Índice 5
    "Málaga",     // Índice 6
    "Sevilla"     // Índice 7
];

echo "<h3>Array original:</h3>";
echo "<pre>";
print_r($provincias);
echo "</pre>";

// 2. Usamos unset() para borrar el elemento de índice 2 (Córdoba)
$indiceABorrar = 2;
unset($provincias[$indiceABorrar]);

echo "<h3>Array después de borrar el índice $indiceABorrar:</h3>";
echo "<pre>";
print_r($provincias);
echo "</pre>";

// Nota: Si quieres volver a ordenar los índices consecutivamente (0, 1, 2...),
// puedes usar la función array_values(), aunque el ejercicio no lo pide:
// $provincias = array_values($provincias);
/***************************************************************************
 * *************************************************************************
 * *************************************************************************
 * *************************************************************************
*/
$cantidadAnimales = rand(20, 30);//generamosel animal alazaar
$animales = [];
function generarAnimalesAleatorio(int $cantidadesAnimales):array {
    global $cantidadAnimales;
    global $animales;
    $cantidadesAnimales = $cantidadAnimales;
    //for ($i = 0; $i < $cantidadesAnimales; $i++) {
        //$animales[] = rand(128000, 128060);
    //}
    array_map(function() use (&$animales){$animales[] = rand(128000, 128060);
    },range(1, $cantidadesAnimales));
    return $animales;
    /*o tambien
    return array_map(fn(). int => random_int(1280000, 128060),
    range(1, $cantidadesAnimales)); */
}
generarAnimalesAleatorio($cantidadAnimales);
function mostrarAnimales(array $codigos):string {
    $emojis = array_map(fn(int $codigo):
    string => mb_chr($codigo, 'UTF-8'), $codigos);
    return implode(' ', $emojis);
}
echo "<h3>$cantidadAnimales animales iniciales:</h3>";
echo "<div style='font-size: 2rem; letter-spacing: 5px;'>";
//foreach ($animales as $codigo) {
   // echo "&#$codigo;"; //el &# es para que html interprtet el unicode
//}
echo mostrarAnimales($animales);
echo "</div><br>";
$indiceAleatorio = array_rand($animales);//array_rand nos devuelve un indice aleatorio
$animalAEliminar = $animales[$indiceAleatorio]; //Guardamos el aleatorio elegido como indice

echo "<h3>Animal a eliminar:</h3>";
echo "<div style='font-size: 3rem;'>&#$animalAEliminar;</div><br>";
foreach ($animales as $indice => $codigo) {
    if ($codigo == $animalAEliminar) {
        unset($animales[$indice]);
    }
}

$animalesRestantes = count($animales);
echo "<h3>Resultado final (quedan $animalesRestantes animales):</h3>";
echo "<div style='font-size: 2rem; letter-spacing: 5px;'>";
foreach ($animales as $codigo) {
    echo "&#$codigo;";
}
echo "</div>";
//9. Array de arrays
//Supongamos que guardamos en una array los datos de los profesores de este centro educativo.
//Cada elemento de este array a su vez será otro array asociativo que nos permitirá almacenar su número de registro personal, su nombre, su apellido/s, su teléfono, y su fecha de nacimiento.
//Se desea:
//a) Crear un array con al menos los datos de 3 profesores
//b) Crear una función que nos permita mostrar el número de registro personal de cada uno de los profesores
//c) Modifica la función anterior y conviértela en una función anónima (usa array_map()).
//d) Crea una función anónima que nos permita mostrar los profesores que han nacido a partir de 1990. ( Usa strtotime() y array_filter()
//NOTA: Ejemplo de uso de funciones anónimas , arrays , array_map() y array_filter().
$profesores = [
    [
    "numeroRegistro" => 12345,
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "telefono" => "123456789",
    "fechaNacimiento" => "1985-06-15"
    ],
    [
    "numeroRegistro" => 54321,
    "nombre" => "Mark",
    "apellido" => "Smith",
    "telefono" => "884763147",
    "fechaNacimiento" => "1992-03-22"
    ],
    [
    "numeroRegistro" => 78945,
    "nombre" => "Marta",
    "apellido" => "Payez",
    "telefono" => "987654321",
    "fechaNacimiento" => "1995-11-10"
    ]
];
//b) Crear una función que nos permita mostrar el número de registro personal de cada uno de los profesores
function numeroRegistro(array $profesores):void {
    for ($i = 0; $i < count($profesores); $i++) {
        echo "Número de registro: " . $profesores[$i]["numeroRegistro"] . "<br>";
    }
}
//diferente forma de recorrer el array asociativo
function mostrarNumerosRegistro(array $profesores): void {
    foreach ($profesores as $profesor) {
        echo "Número de registro: " . $profesor["numeroRegistro"] . "<br>";
    }
}
//c) Modifica la función anterior y conviértela en una función anónima (usa array_map()).
$mostrarNumerosRegistroAnonima = function(array $profesores): void { 
    array_map(function($profesor) {
        echo "Número de registro: " . $profesor["numeroRegistro"] . "<br>";
    }, $profesores); 
};
//d) Crea una función anónima que nos permita mostrar los profesores que han nacido a partir de 1990. ( Usa strtotime() y array_filter()
function mostrarProfesorteNacidosDespues1990(array $profesores):void{
    array_filter($profesores, fn($elemento)=> 
    strtotime($elemento["fechaNacimiento"]) > strtotime("1990-01-01"));
}

?>