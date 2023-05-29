<?php
    /** el echo se usa para imprimir un mensaje */
    echo "texto a imprimir";
    /**cremos una variable texto y la imprimimos usando el metodo printf */
    $texto = "mundo";
    printf("%s hola ", $texto);
    /**creamos una variable para almacenar el mensaje que contiene el metodo sprintf que lo que hace es formatear el mensaje y sus variables */
    $mensaje = sprintf("hola %s", $texto);
    echo $mensaje;

?>  