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
                    <label for="">CampusLand</label>
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
                            <input type="number" name="horarioEntrada" placeholder="Horario de Entrada">
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
                            <button>✔</button>
                            <button>x</button>
                        </div>
                        <br>
                        <div class="btn"><button>✎</button>
                        <button>⌨</button></div>
                        <br>
                        <div>
                            <input type="number" name="cedula" placeholder="Cedula">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>