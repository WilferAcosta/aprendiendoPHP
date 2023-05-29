<?php
    /** el echo se usa para imprimir un mensaje */
    echo "texto a imprimir <br>";
    /**cremos una variable texto y la imprimimos usando el metodo printf */
    $texto = "mundo";
    printf("%s hola ", $texto);
    /**creamos una variable para almacenar el mensaje que contiene el metodo sprintf que lo que hace es formatear el mensaje y sus variables */
    $mensaje = sprintf("hola %s", $texto,"<br>");
    echo $mensaje;
    echo "<br>";
    /**Variables y constantes */

    //declaramos una variable numerica
    $edad = 28;
    //declaramos una variable texto
    $nombre = "Wilfer";
    //declaramos una variable booleana 
    $es_valido = true;
    /** el uso de var_dump se usa para que muestre el tipo de dato y su length */
    echo var_dump($nombre);
    echo var_dump($edad);
    echo var_dump($es_valido);

    /** CREAR TIPO DE DATOS CONST EN PHP */
    //crear una constante numerica siempre en mayuscula y leugo su value.
    define("PI",3.1416);
    //declarar una constante de tecto
    define("SALUDO","hola como estas");
    //declarar una constante boolean
    define("ES_VALIDO",true);

    /** Tipos de datos*/

    //boolean
    $logueado = true;
    var_dump($logueado);
    //enteros
    $numeros = 200;
    var_dump($numeros);
    //floats
    $float = 200.5;
    var_dump($float);
    // string
    $nombres = "Wilfer";
    var_dump($nombres);
    // array
    $array =[];
    var_dump($array);

    /** Números y operadores */
    //creamos variables
    $numero1= 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";
    //mayor que osea numero1 es mayor que numero2
    var_dump($numero1 > $numero2);
    echo "<br>"; 
    //menor que osea numero1 es menor que numero2
    var_dump($numero1 < $numero2);
    echo "<br>"; 
    //mayor o igual que osea numero1 es mayor o igual al numero 2
    var_dump($numero1 >= $numero2);
    echo "<br>"; 
    //menor o igual que osea que si numero1 es menor o igual al numero2
    var_dump($numero1 <= $numero2);
    echo "<br>"; 
    //igual doble osea que si es igual el numero o texto no importa el tipo de dato
    var_dump($numero2 == $numero3);
    echo "<br>"; 
    //igual doble osea que si es igual el numero o texto no importa el tipo de dato
    var_dump($numero2 == $numero4);
    echo "<br>"; 
    //igual triple o estricto valida que los dos sean igual en value y en tipo de dato
    var_dump($numero2 === $numero4);
    echo "<br>"; 
?>  