<?php

require "../vendor/autoload.php";
$router = new \Bramus\Router\Router();

$router->get("/camper", function () {
    $con = new \App\connect();
    $res = $con->conx->prepare("SELECT * FROM tb_camper");
    $res->execute();
    $res = $res->fetchAll(\PDO::FETCH_ASSOC);
    print_r($res);
    echo json_encode($res);
});

$router->post("/camper", function () {
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $con = new \App\connect();
    $res = $con->conx->prepare("INSERT INTO tb_camper (nombre, id) VALUES (:NOMBRE, :CEDULA)");
    $res->bindValue(":NOMBRE", $_DATA["nom"]);
    $res->bindValue(":CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->put("/camper", function () {
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $con = new \App\connect();
    $res = $con->conx->prepare("UPDATE tb_camper SET nombre = :NOMBRE WHERE id = :CEDULA");
    $res->bindValue(":NOMBRE", $_DATA["nom"]);
    $res->bindValue(":CEDULA", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->delete("/camper", function () {
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $con = new \App\connect();
    $res = $con->conx->prepare("DELETE FROM tb_camper WHERE id = :ID");
    $res->bindValue(":ID", $_DATA["id"]);
    $res->execute();
    $res = $res->rowCount();
    echo json_encode($res);
});

$router->run();
?>
