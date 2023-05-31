<?php
echo <<<HTML
Hola Mundo <br> <a href="index.html">Volver</a>
HTML;
var_dump(isset($_POST));

if (isset($_POST)){
    $datos = $_POST["dato"];
}

?>