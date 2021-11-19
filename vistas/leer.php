<?php

//include '../PDO/Conexion.php';
//use \PDO\Conexion;
//
//$conexion = new Conexion();
//$conn = $conexion->obtenerConexion();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Visualizar Usuario</title>
</head>
<body>
    <header class="
       bg-primary text-light w-75 mx-auto p-2 m-3
    ">
        <h1 class="h4 text-center p-1">PRACTICA BASE DE DATOS</h1>

    </header>
    
    <main class="
        bg-white w-75 mx-auto p-3 text-white border rounded
    ">
        <h2 class="text-dark h5 p-2 m-2 fw-normal">Visualizar Usuario</h2>

        <table class="table table-hover w-75 mx-auto mt-5 mb-5">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Cargo</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cristobal</td>
                    <td>Hernandez</td>
                    <td>Gallegos</td>
                    <td>Operador</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Antonia</td>
                    <td>Lopez</td>
                    <td>Lopez</td>
                    <td>Tecnico</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Antonia</td>
                    <td>Lopez</td>
                    <td>Lopez</td>
                    <td>Tecnico</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Antonia</td>
                    <td>Lopez</td>
                    <td>Lopez</td>
                    <td>Tecnico</td>
                </tr>
                <!-- // echo "<tr>
                //     <td>$usuario->id</td>
                //     <td>$usuario->nombre</td>
                //     <td>$usuario->apellido_paterno</td>
                //     <td>$usuario->apellido_materno</td>
                //     <td>$usuario->cargo</td>
                // </tr>"
                // }?> -->
            </tbody>
        </table>

        <div class="w-50">
            <a href="../index.php" class="btn btn-outline-primary mb-3 w-25 p-1 d-block m-2">Regresar a Inicio</a>
        </div>

    </main>
    
</body>
</html>