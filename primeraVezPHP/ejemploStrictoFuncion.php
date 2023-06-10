<?php
    declare(strict_types=1);
    function datos():void{
        extract(...func_get_args());
        if(isset($edad)){
            echo $edad;
        };
        //echo $nombre;
        //var_dump(...func_get_args());//se usa ... para desestructurar el arary
    };
    datos(["nombre"=>(string)"wilfer","edad"=>(int)28,"casa"=>(boolean)true]);
    // $nombre = "wilfer";
    // $fn = function() use($nombre):string{
    //     return $nombre;
    // };
    // echo $fn();


    //funcion anonima
    // $fn = function():bool{
    //     return true;
    // };
    // echo $fn();

    //funciones
    // function saludar(string $nombre): ?string {
    //     if ($nombre == "wilfer") {
    //         return "hola como estas wilfer";
    //     }
    //     return null;
    // };
    // echo saludar("wilfer");
?>