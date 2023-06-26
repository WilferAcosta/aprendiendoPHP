<?php
namespace App;
class connect {
    public $conx;
    function __construct(){
        try{
            $this->conx=new \PDO( $_ENV["DNS"].":host=".$_ENV["HOST"].";dbname=".$_ENV["DBNAME"].";user=".$_ENV["USER"].";password=".$_ENV["PASSWORD"].";port=".$_ENV["PORT"]);
            $this->conx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $e){
            print_r($e->getMessage());
        }
                
    }
}
?>