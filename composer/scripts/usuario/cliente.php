<?php
namespace App;
class cliente{
    use system;
    function __construct(){
        $_Data = $this->data();
        print_r($_Data);
    }
}

?>