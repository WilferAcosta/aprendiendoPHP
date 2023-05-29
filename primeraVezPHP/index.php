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
    define("ES_VALIDO",true)

?>  