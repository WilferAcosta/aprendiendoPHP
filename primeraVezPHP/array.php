<?php
    header('Content-Type: application/json');
    /**
     * todo Array Indexado
     * *Este tipo de array tiene índices numéricos. Aquí está un ejemplo de cómo definir un array indexado:
     * @var array $nombres
     */
    $nombres = array("Juan", "Pedro", "Santiago");
    print_r($nombres);
    // echo "<hr>";
    /**
     * todo Array Asociativo
     * *En este tipo de array, los valores son asociados con claves específicas en lugar de índices numéricos. Aquí está un ejemplo:
     * @var array $edades
     */
    $edades = array(
        "Juan" => 35, 
        "Pedro" => 37, 
        "Santiago" => 43);
    print_r($edades);
    // echo "<hr>";
    /**
     * todo Array Multidimensional
     * *Este es un array que contiene uno o más arrays en sí. Un ejemplo común sería un array que contiene información para varias personas, donde cada persona es un array que contiene la información para esa persona. Aquí está un ejemplo:
     * @var array $personas
     */
    $personas = array(
        "Juan" => array(
            "Edad" => 35, 
            "Ciudad" => "Madrid", 
            "País" => "España"),
        "Pedro" => array(
            "Edad" => 37, 
            "Ciudad" => "Barcelona", 
            "País" => "España"),
        "Santiago" => array(
            "Edad" => 43, 
            "Ciudad" => "Valencia", 
            "País" => "España")
    );
    /**
     * ? Ejemplo de como insertar un dato nuevo al array Multidimensional
     */
    $personas["Pedro"]["Altura"] = 1.63;
    print_r($personas);
    /**
     * ? Ejemplo de como aceder al array
     */
    print_r($personas['Pedro']['País']);
    /** ******Funciones mas usadas para manejode Array****** */
    echo ('<br>');
    $arrayMascotas = [
        "lucas"=> array(
            "edad" => 5,
            "ciudad" => "Bucaramanga",
            "dueño" => "Wilfer"
        ),
        "negro"=>array(
            "edad" => 10,
            "ciudad" => "Socorro",
            "dueño" => "Orlando"
        )
        ];
    var_dump($arrayMascotas);
    echo ('<br>');
    //array_flip(): Intercambia las claves con sus valores correspondientes en un array.
    $array1 = array("a" => 1, "b" => 2 ,"c" => 3,"d" => 4,"e" => 5,"f" => 6);
    $cambio = array_flip($array1);
    print_r($cambio);

    //array_fill(): Rellena un array con un valor especificado.
    $a = array_fill(5, 6, 'banana');
    $b = array_fill(-2, 4, 'pear');
    print_r($a);
    print_r($b);

    //array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
    function impar($var)
{
    // Retorna siempre que el número entero sea impar
    return $var & 1;
}

function par($var)
{
    // Retorna siempre que el número entero sea par
    return !($var & 1);
}
    $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $array2 = [6, 7, 8, 9, 10, 11, 12];

    echo "Impar :\n";
    print_r(array_filter($array1, "impar"));
    echo "Par:\n";
    print_r(array_filter($array2, "par"));

    //array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
    function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
//array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
function suma($carry, $item)
{
    $carry += $item;
    return $carry;
}

function producto($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "suma")); // int(15)
var_dump(array_reduce($a, "producto", 10)); // int(1200), ya que: 10*1*2*3*4*5
var_dump(array_reduce($x, "suma", "No hay datos a reducir")); // string(22) "No hay datos a reducir"

//array_key_exists(): Comprueba si una clave existe en un array.
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
//EJEMPLO2
$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);

//in_array(): Comprueba si un valor existe en un array.
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
if (in_array("mac", $os)) {
    echo "Existe mac";
}
//array_rand(): Devuelve una o varias claves aleatorias de un array.
$entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$claves_aleatorias = array_rand($entrada, 2);
echo $entrada[$claves_aleatorias[0]] . "\n";
echo $entrada[$claves_aleatorias[1]] . "\n";

//array_unique(): Elimina los valores duplicados de un array.
$entrada = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
$resultado = array_unique($entrada);
print_r($resultado);

//array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

//array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
$array1    = array("a" => "green", "red", "blue", "red");
$array2    = array("b" => "green", "yellow", "red");
$resultado = array_diff($array1, $array2);

print_r($resultado);

//array_push(): Agrega uno o más elementos al final de un array.
$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila);

//array_pop(): Extrae y elimina el último elemento de un array.
$stack = array("naranja", "plátano", "manzana", "frambuesa");
$fruit = array_pop($stack);
print_r($stack);

//array_reverse(): Revierte el orden de los elementos en un array.
$input  = array("php", 4.0, array("verde", "rojo"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

//array_sum(): Devuelve la suma de todos los valores de un array numérico.

$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";

//array_product(): Devuelve el producto de todos los valores de un array numérico.
$a = array(2, 4, 6, 8);
echo "producto(a) = " . array_product($a) . "\n";
echo "producto(array()) = " . array_product(array()) . "\n";

//array_chunk(): Divide un array en fragmentos más pequeños.
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));

//array_keys(): Devuelve todas las claves de un array.
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));

//array_values(): Devuelve todos los valores de un array.
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

//array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo)
{
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave)
{
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... y después:\n";

// array_walk($frutas, 'test_print');
// array_flip(): Intercambia las claves con sus valores correspondientes en un array.
// array_fill(): Rellena un array con un valor especificado.
// array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
// array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
// array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
// array_key_exists(): Comprueba si una clave existe en un array.
// in_array(): Comprueba si un valor existe en un array.
// array_rand(): Devuelve una o varias claves aleatorias de un array.
// array_unique(): Elimina los valores duplicados de un array.
// array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
// array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
// array_push(): Agrega uno o más elementos al final de un array.
// array_pop(): Extrae y elimina el último elemento de un array.
// array_reverse(): Revierte el orden de los elementos en un array.
// array_sum(): Devuelve la suma de todos los valores de un array numérico.
// array_product(): Devuelve el producto de todos los valores de un array numérico.
// array_chunk(): Divide un array en fragmentos más pequeños.
// array_keys(): Devuelve todas las claves de un array.
// array_values(): Devuelve todos los valores de un array.
// array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
?>