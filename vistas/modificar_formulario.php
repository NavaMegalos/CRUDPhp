<?php
    include '../PDO/Conexion.php';
    use \PDO\Conexion;
    $conexion = new Conexion();
    $conn = $conexion->obtener_conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modificar Usuario</title>
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
    <h2 class="text-dark h5 p-2 m-2 fw-normal">Modificar Usuario</h2>

    <?php
    $arr_datos = [];
    if(isset($_GET['id_modificar'])) {
        $id_usuario = $_GET['id_modificar'];
        $sql = $conn->query("SELECT * FROM usuarios WHERE id=$id_usuario");
        $resultados = $sql->fetchAll();
        foreach ($resultados as $resultado) {
            $arr_datos[] = $resultado['0'];
            $arr_datos[] = $resultado['1'];
            $arr_datos[] = $resultado['2'];
            $arr_datos[] = $resultado['3'];
            $arr_datos[] = $resultado['4'];
        }
    }
    ?>
    <form method="GET" action="../controlador/UsuarioController.php" class="w-75 mx-auto mt-5 mb-5">

        <div class="mb-3">
            <input hidden type="text" class="form-control" id="id" name="id" value="<?=$arr_datos[0]?>">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="nombre" value="<?= $arr_datos[1]?>">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoPaterno" name="apellido_paterno" value="<?=$arr_datos[2]?>">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">Apellido Materno</label>
            <input type="text" class="form-control" id="apellidoMaterno" name="apellido_materno" value="<?=$arr_datos[3]?>">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="<?=$arr_datos[4]?>">
        </div>


        <div class="mb-3 text-center mt-5">
            <button type="submit" name="modificar_formulario" class="btn btn-outline-primary ">Modificar Usuario</button>
        </div>
    </form>

    <div class="w-50">
        <a href="../index.php" class="btn btn-outline-primary mb-3 w-25 p-1 d-block m-2">Regresar a Inicio</a>
    </div>

</main>

</body>
</html>
