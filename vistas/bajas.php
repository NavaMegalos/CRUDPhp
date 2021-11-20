<?php
    include '../PDO/Conexion.php';
    use \PDO\Conexion;

    $conexion = new Conexion();
    $conn = $conexion->obtener_conexion();
    $sql = $conn->query("SELECT * FROM usuarios");
    $resultados = $sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        li {
            list-style-type: none;
            color: gray;
        }

        li:hover {
            background-color:  #aed6f1 ;
            color: black;
        }
    </style>
    <title>Eliminar Usuario</title>
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
    <h2 class="text-dark h5 p-2 m-2 fw-normal">Eliminar Usuario</h2>
    <ul class="text-dark w-75 mx-auto mt-5 mb-5">
        <?php
        foreach ($resultados as $resultado) {
            echo "<li class='p-2 m-2 rounded text-left d-flex'>
                         <p class='inline w-50'>
                             Id: $resultado[id]
                             <br>
                             Nombre: $resultado[nombre]
                             $resultado[apellido_paterno]
                             $resultado[apellido_materno]
                             <br>
                             Cargo: $resultado[cargo]
                         </p>
                         <div class='w-25 float-left text-right '>
                            <a href='../controlador/UsuarioController.php?id_eliminar=$resultado[id]' class='btn btn-danger float-right'>Eliminar Usuario</a>
                         </div>
                    </li>";
        }
        ?>
    </ul>
    <div class="w-50">
        <a href="../index.php" class="btn btn-outline-primary mb-3 w-25 p-1 d-block m-2">Regresar a Inicio</a>
    </div>

</main>

</body>
</html>