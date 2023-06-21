<?php

namespace app\user;
use getInstance as instan;
    class usuario{
        use instan;
        function __construct(){
            echo "Nombre " .__CLASS__;// CUANDO EL METODO ES ESTATICO SE USA SELF PARA QUE SAQUE EL NOMBRE DE LA CLASS Y EL CLASS PARA MODIFICADORES PUBLI PRIVATE Y PROTEGIDO
        }
    }
?>