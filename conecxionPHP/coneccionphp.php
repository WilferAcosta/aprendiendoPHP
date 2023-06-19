<?php
conexionphp();
    function conexionphp(){
        $server = 'localhost';
        $user = 'root';
        $password = 'fbe995f17c';
        $db = 'holamundo'; 
        $conectar = mysqli_connect($server, $user, $password, $db);
        
        if (!$conectar) {
            die("Error en la conexión: " . mysqli_connect_error());
        }   
        return $conectar;
    }

?>