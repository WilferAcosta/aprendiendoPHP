<?php

namespace App;

class connect extends credentials{
    protected $conx;
    function __construct(private $dsn = "mysql", private $port = 0){
        parent::__construct();
        try{
            $this->conx=new \PDO( $this->dsn.":host=".$this->__get('host').";dbname=".$this->__get('dbname').";user=". $this->username.";password=".$this->__get('password').";port=". $this->port);
            $this->conx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            print_r("conexion exitosa mi primera vez en una conexion de pdo ");
        }catch (\PDOException $e){
            print_r($e->getMessage());
        }
                
    }
}
