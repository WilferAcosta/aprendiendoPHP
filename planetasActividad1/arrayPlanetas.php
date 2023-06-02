<?php 
echo <<<HTML
el planeta buscado fue :<br> <a href="indexPlaneta.html">Volver</a>
HTML;
$sistemaSolar = array(
    "sol" => 1,
    "mercurio" => 2,
    "venus" => 3,
    "tierra" => 4,
    "marte" => 5,
    "jupiter" => 6,
    "saturno" => 7,
    "urano" => 8,
    "neptuno" => 9,
    "pluton" => 10
);
if (isset($_POST)) {
$buscar = $_POST['numero'];
$ordenados=array_flip($sistemaSolar);
$resultado = $ordenados[$buscar];
echo "<h1>$resultado</h1>";
}
?>
