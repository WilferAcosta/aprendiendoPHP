<?php

namespace App;
trait system{
    public function data(){
        return !$_POST == null ? ["message"=> null] : file_get_contents('php://input');
    }
}
?>