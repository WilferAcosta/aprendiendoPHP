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
        $data = json_encode($data);
        $credenciales["http"]["content"] = $data;
        $config = stream_context_create($credenciales);
        $_DATA = file_get_contents("https://648135c829fa1c5c50312fcf.mockapi.io/users", false, $config);
    } elseif (isset($_POST['buscar'])) {
        $cedula = $_POST['cedula'];
        
        // Validate cedula input
        if (!empty($cedula)) {
            // Construir la URL de búsqueda
            $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users?cedula=" . urlencode($cedula);
            // Realizar la solicitud GET a la URL de búsqueda
            $response = file_get_contents($url);
            // Analizar la respuesta JSON
            $data = json_decode($response, true);
            if (!empty($data)) {
                $nombre = $data[0]['nombre'];
                $apellido = $data[0]['apellido'];
                $direccion = $data[0]['direccion'];
                $edad = $data[0]['edad'];
                $email = $data[0]['email'];
                $horarioEntrada = $data[0]['horarioEntrada'];
                $team = $data[0]['team'];
                $trainer = $data[0]['trainer'];
                
                // Display the results
                // ...
            } else {
                echo "No se encontraron resultados.";
            }
        } else {
            echo "La cédula es requerida para realizar la búsqueda.";
        }
    } elseif (isset($_POST['actualizar'])) {
        $cedula = $_POST['cedula'];
    
        // Validate cedula input
        if (!empty($cedula)) {
            // Construir la URL de búsqueda
            $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users?cedula=" . urlencode($cedula);
            // Realizar la solicitud GET a la URL de búsqueda
            $response = file_get_contents($url);
            // Analizar la respuesta JSON
            $data = json_decode($response, true);
    
            // Verificar si se encontraron datos para la cédula ingresada
            if (!empty($data)) {
                $id = $data[0]['id'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $direccion = $_POST['direccion'];
                $edad = $_POST['edad'];
                $email = $_POST['email'];
                $horarioEntrada = $_POST['horarioEntrada'];
                $team = $_POST['team'];
                $trainer = $_POST['trainer'];
    
                // Construir el array de datos a enviar en la solicitud de actualización
                $data = array(
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'direccion' => $direccion,
                    'edad' => $edad,
                    'email' => $email,
                    'horarioEntrada' => $horarioEntrada,
                    'team' => $team,
                    'trainer' => $trainer,
                    'cedula' => $cedula
                );
    
                // Convertir los datos a formato JSON
                $data = json_encode($data);
    
                // Construir las credenciales y configuración de la solicitud
                $credenciales["http"]["method"] = "PUT";
                $credenciales["http"]["header"] = "Content-type: application/json";
                $credenciales["http"]["content"] = $data;
                $config = stream_context_create($credenciales);
    
                // Realizar la solicitud de actualización enviando los datos al endpoint correspondiente
                $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users/" . urlencode($id);
                $response = file_get_contents($url, false, $config);
    
                // Procesar la respuesta y mostrar un mensaje de éxito o error
                if ($response !== false) {
                    echo "Los datos se actualizaron correctamente.";
                } else {
                    echo "Error al actualizar los datos.";
                }
            } else {
                echo "No se encontraron datos para la cédula ingresada.";
            }
        } else {
            echo "El campo cédula es requerido para realizar la actualización.";
        }
    } elseif (isset($_POST['eliminar'])) {
        $cedula = $_POST['cedula'];
        if(empty($cedula)){
        // Construir la URL de búsqueda
        $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users?cedula=" . urlencode($cedula);

        // Realizar la solicitud GET a la URL de búsqueda
        $response = file_get_contents($url);

        // Analizar la respuesta JSON
        $data = json_decode($response, true);

        // Verificar si se encontraron datos para la cédula ingresada
        if (!empty($data)) {
            $id = $data[0]['id'];

            // Construir las credenciales y configuración de la solicitud
            $credenciales["http"]["method"] = "DELETE";
            $config = stream_context_create($credenciales);

            // Realizar la solicitud de eliminación al endpoint correspondiente
            $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users/" . urlencode($id);
            $response = file_get_contents($url, false, $config);

            // Procesar la respuesta y mostrar un mensaje de éxito o error
            if ($response !== false) {
                echo "Los datos se eliminaron correctamente.";
            } else {
                echo "Error al eliminar los datos.";
            }
        } else {
            echo "No se encontraron datos para la cédula ingresada.";
        }
    }else{
        echo "se requiere la  cedula para la busqueda";
    }
    } elseif (isset($_POST['subirData'])) {
        $trae=$_POST['subirData'];
        $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users?cedula=" . urlencode($trae);
        // Realizar la solicitud GET a la URL de búsqueda
        $response = file_get_contents($url);
        // Analizar la respuesta JSON
        $data = json_decode($response, true);
        if (!empty($data)) {
            $nombre = $data[0]['nombre'];
            $apellido = $data[0]['apellido'];
            $direccion = $data[0]['direccion'];
            $edad = $data[0]['edad'];
            $email = $data[0]['email'];
            $horarioEntrada = $data[0]['horarioEntrada'];
            $team = $data[0]['team'];
            $trainer = $data[0]['trainer'];
        }else {
            echo "No se encontraron resultados.";
        }
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
                            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>">
                        </div>
                        <br>
                        <div>
                            <input type="text" name="apellido" placeholder="Apellido" value="<?php echo isset($apellido) ? $apellido : ''; ?>">
                        </div>
                        <br>
                        <div>
                            <input type="text" name="direccion" placeholder="Direccion" value="<?php echo isset($direccion) ? $direccion : ''; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>CampusLand</label>
                        </div>
                        <br>
                        <div>
                            <input type="number" name="edad" placeholder="Edad" value="<?php echo isset($edad) ? $edad : ''; ?>">
                        </div>
                        <br>
                        <div>
                            <input type="text" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>">
                        </div>
                    </div>
                    <div class="container2">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <input type="time" name="horarioEntrada" placeholder="Horario de Entrada" value="<?php echo isset($horarioEntrada) ? $horarioEntrada : ''; ?>">
                                </div>
                                <br>
                                <div>
                                    <input type="text" name="team" placeholder="Team" value="<?php echo isset($team) ? $team : ''; ?>">
                                </div>
                                <br>
                                <div>
                                    <input type="text" name="trainer" placeholder="Trainer" value="<?php echo isset($trainer) ? $trainer : ''; ?>">
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
                                    <input type="number" name="cedula" placeholder="Cedula" value="<?php echo isset($cedula) ? $cedula : ''; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container2">
            <div class="row">
                <h1>Datos Ingresados</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST">
                        <?php
                        $url = "https://648135c829fa1c5c50312fcf.mockapi.io/users";
                        $response = file_get_contents($url);

                        // Analizar la respuesta JSON
                        $data = json_decode($response, true);
                        
                        // Procesar los datos encontrados
                        if (!empty($data)) {
                            foreach ($data as $item) {
                                echo "<tr>";
                                echo "<td>" . $item['nombre'] . "</td>";
                                echo "<td>" . $item['apellido'] . "</td>";
                                echo "<td>" . $item['direccion'] . "</td>";
                                echo "<td>" . $item['edad'] . "</td>";
                                echo "<td>" . $item['email'] . "</td>";
                                echo "<td>" . $item['horarioEntrada'] . "</td>";
                                echo "<td>" . $item['team'] . "</td>";
                                echo "<td>" . $item['trainer'] . "</td>";
                                
                                echo '<td><button type="submit" name="subirData" value="' . $item['cedula'] . '">↑</button></td>';
                                // Añade más columnas según los datos que quieras mostrar
                                echo "</tr>";
                            }
                        } else {
                            echo "No se encontraron resultados.";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        ?>
                        </form>
                    </tbody>
            </div>
        </div>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>

    </html>