<?php
//header("Content-Type: application/json");
/**Se usa <<< para escribit codigo html pero sigue siendo un string */
echo <<<HTML
    Hola Mundo <br> <a href="index.html">Volver</a>
HTML;
/**como obtener datos del html usando get pero se ven en el url para que no se vea se usa el metodo post*/
var_dump($_GET);
var_dump($_POST);

?>