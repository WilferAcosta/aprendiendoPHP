<?php
    session_start();
    if (isset($_POST['enviar'])) {
        // Procesar los datos enviados
        $data = array();
        foreach ($_POST as $key => $value) {
            if ($key !== 'enviar') {
                $data[$key] = $value;
            }
        }
        $credenciales["http"]["method"] = "POST";
        $credenciales["http"]["header"] = "Content-type: application/json";
        $data;
        $data = json_encode($data);
        $credenciales["http"]["content"] = $data;
        $config = stream_context_create($credenciales);
        $_DATA = file_get_contents("https://648135c829fa1c5c50312fcf.mockapi.io/users", false, $config);
        print_r($_DATA);
    
    }elseif (isset($_POST['buscar'])) {
        $cedula = $_POST['cedula'];
    // Construir la URL de búsqueda
    $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users?cedula=" . urlencode($cedula);
    // Realizar la solicitud GET a la URL de búsqueda
    $response = file_get_contents($url);
    // Analizar la respuesta JSON
    $data = json_decode($response, true);

    // Procesar los datos encontrados
    if (!empty($data)) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Dirección</th>";
        // Añade más encabezados de columna según tus necesidades
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        foreach ($data as $item) {
            echo "<tr>";
            echo "<td>" . $item['nombre'] . "</td>";
            echo "<td>" . $item['apellido'] . "</td>";
            echo "<td>" . $item['direccion'] . "</td>";
            // Añade más columnas según los datos que quieras mostrar
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
    }elseif (isset($_POST['actualizar'])){

    }elseif (isset($_POST['eliminar'])){
        
    };

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Crud</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stylos.css">
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="row">
                <h1>Formulario con CRUD</h1>
                <div class="col">
                    <div>
                        <input type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <br>
                    <div>
                        <input type="text" name="apellido" placeholder="Apellido">
                    </div>
                    <br>
                    <div>
                        <input type="text" name="direccion" placeholder="Direccion">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label>CampusLand</label>
                    </div>
                    <br>
                    <div>
                        <input type="number" name="edad" placeholder="Edad">
                    </div>
                    <br>
                    <div>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="container2">
                    <div class="row">
                        <div class="col">
                            <div>
                                <input type="time" name="horarioEntrada" placeholder="Horario de Entrada">
                            </div>
                            <br>
                            <div>
                                <input type="text" name="team" placeholder="Team">
                            </div>
                            <br>
                            <div>
                                <input type="text" name="trainer" placeholder="Trainer">
                            </div>
                        </div>
                        <div class="col">
                            <div class="btn">
                                <button type="submit" name="enviar" class="enviar">✔</button>
                                <button type="submit" name="eliminar" class="eliminar">x</button>
                            </div>
                            <br>
                            <div class="btn">
                                <button type="submit" name="actualizar" class="actualizar">✎</button>
                                <button type="submit" name="buscar" class="buscar">⌨</button>
                            </div>
                            <br>
                            <div>
                                <input type="number" name="cedula" placeholder="Cedula">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
        <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dirección</th>
                            <th>Edad</th>
                            <th>Email</th>
                            <th>Horario de Entrada</th>
                            <th>Team</th>
                            <th>Trainer</th>
                            <th>Cédula</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>