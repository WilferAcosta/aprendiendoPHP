<?php
//como serecibe un json desde new request 
$_DATA= json_decode(file_get_contents("php://input"),true);//recibe los datos por el puerto osea escucha el servidor , se usa json_decpde para recibirlo como array
echo "hola";
print_r($_DATA);

?>