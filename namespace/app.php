<?php
use cliente1\Humano;
use cliente2\Humano as a;
require_once("carpeta1/humano.php");
require_once("carpeta2/humano.php");
$obj = new Humano();
echo $obj;
$obj1 = new a();
echo $obj1;

?>