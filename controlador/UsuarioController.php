<?php
    namespace controlador;

    require '../modelo/Usuario.php';
    use \modelo\Usuario;

   function agregar() {
        $nombre = $_REQUEST['nombre'];
        $apellido_paterno = $_REQUEST['apellido_paterno'];
        $apellido_materno = $_REQUEST['apellido_materno'];
        $cargo = $_REQUEST['cargo'];

         // if(strlen($nombre) < 1 || strlen($apellido_paterno) < 1 || strlen($apellido_materno) < 1 || strlen($cargo) < 1) {
         //     return;
         // }

        $usuario_nuevo = new Usuario($nombre, $apellido_paterno, $apellido_materno, $cargo);
        $usuario_nuevo->agregar_usuario();

        $usuarios = $usuario_nuevo->leer_usuario();
       foreach ($usuarios as $usuario) {
           echo $usuario['nombre'];

        }
   } 

//    function agregar() {
//     //    isset($_GET['nombre']) {
//     //    echo "entraste";
//        $nombre = $_REQUEST['nombre'];
//        $apellido_paterno = $_REQUEST['apellido_paterno'];
//        $apellido_materno = $_REQUEST['apellido_materno'];
//        $cargo = $_REQUEST['cargo'];
//     //    }

//         // if(strlen($nombre) < 1 || strlen($apellido_paterno) < 1 || strlen($apellido_materno) < 1 || strlen($cargo) < 1) {
//         //     return;
//         // }

//        $usuario_nuevo = new Usuario($nombre, $apellido_paterno, $apellido_materno, $cargo);
//        $usuario_nuevo->agregar_usuario();
//        echo "usuario agregado...";
//    } 

   if(isset($_GET['alta_formulario']))
   {
       echo "entrando...";
       agregar();
   } 

//    if(isset($_REQUEST['alta_formulario']))
//    {
//        echo "entrando..";
//        agregar();
//    } 