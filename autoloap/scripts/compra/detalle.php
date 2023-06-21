<?php

namespace app\details;
use getInstance as instan;
class detalle{
    use instan;
    function __construct(public string $nombre,public int $edad){}
}
?>