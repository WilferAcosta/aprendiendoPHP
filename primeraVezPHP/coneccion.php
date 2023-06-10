<?php
    $credenciales["http"]["method"] = "POST";
    $credenciales["http"]["header"] = "Content-type: application/json";
    $data = [
        "cc"=>"123",
        "nombre"=> "Wilfer",
        "apelldio"=> "Acosta",
        "edad"=> 28
    ];
    $data = json_encode($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents("https://6480ebf4f061e6ec4d4a1648.mockapi.io/informacion", false, $config);
    print_r($_DATA);
?>