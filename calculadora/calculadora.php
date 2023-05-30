<?php
echo <<<HTML
    Hola Mundo <br> <a href="index.html">Volver</a>
HTML;
var_dump(isset($_POST));

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;

    // Realizar cálculo según el operador seleccionado
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: División entre cero no está permitida.";
            }
            break;
    }
    // Mostrar el resultado
    echo "<h2>Resultado: $result</h2>";


?>