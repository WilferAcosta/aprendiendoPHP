<?php
/**Funciones definidas por el usuario */
//el siguiente ejemplo se podrá visualizar la misma función aplicando la palabra
//reservada void y no aplicándola.
declare(strict_types=1);
function sumar(int $n1,array $n2):void{
    echo $n1 + $n2;
}
sumar(10,[]);
//i sin el void
// declare(strict_types=1);
// function sumar(int $n1,array $n2):void{
//     echo $n1 + $n2;
// }
// sumar(10,[]);

/** Funciones que retorna algun valor */
declare(strict_types=1);
function usuarioAutentificado(bool $autenticado): ?String{
    if($autenticado){
        return 'El usuario esta autentificado';
    }else {
        return null;
    }
}
$usuario = usuarioAutentificado(false);
echo $usuario;
?>