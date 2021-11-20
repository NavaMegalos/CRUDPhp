<?php

include '../PDO/Conexion.php';
use \PDO\Conexion;

$conexion = new Conexion();
$conn = $conexion->obtener_conexion();
$sql = $conn->query("SELECT * FROM usuarios");

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
                <?php
                try{

                    $resultados = $sql->fetchAll();

                    if($resultados > 0) {
                        foreach ($resultados as $resultado) {
                            echo "<tr>
                         <td>$resultado[id]</td>
                         <td>$resultado[nombre]</td>
                         <td>$resultado[apellido_paterno]</td>
                         <td>$resultado[apellido_materno]</td>
                         <td>$resultado[cargo]</td>
                    </tr>";
                        }
                    }
                    if($resultados == null) {
                        echo "<tr>
                         <td>1</td>
                         <td>Emilio</td>
                         <td>Perales</td>
                         <td>Limon</td>
                         <td>Asistente</td>
                    </tr>";
                    }
                }catch (Exception $e) {
                    echo $e;
                }
                ?>
            </tbody>
        </table>

        <div class="w-50">
            <a href="../index.php" class="btn btn-outline-primary mb-3 w-25 p-1 d-block m-2">Regresar a Inicio</a>
        </div>

    </main>
    
</body>
</html>