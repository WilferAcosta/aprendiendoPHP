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

?>