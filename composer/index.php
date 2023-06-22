<?php
require "./vendor/autoload.php";

$router = new \Bramus\Router\Router();

$router->get("/bebe",function(){
    echo "Que mas pues bebesita";
});
$router->post("/bebe",function(){
    $data = !$_POST == null ? ["message"=> null] : file_get_contents('php://input'); 
    print_r($data);
});
$router->put("/bebe",function(){
    echo "Que mas pues bestia";
});
$router->delete("/bebe",function(){
    echo "Que mas pues marica";
});
$router->run();

?>