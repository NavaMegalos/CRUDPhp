<?php
    namespace controlador;

    require '../modelo/Usuario.php';
    use \modelo\Usuario;

    function validar_usuario() {
        $nombre = $_REQUEST['nombre'];
        $apellido_paterno = $_REQUEST['apellido_paterno'];
        $apellido_materno = $_REQUEST['apellido_materno'];
        $cargo = $_REQUEST['cargo'];

        $arr_datos = [
            'nombre' => $nombre,
            'apellido_paterno' => $apellido_paterno,
            'apellido_materno' => $apellido_materno,
            'cargo' => $cargo
        ];

        return $arr_datos;
    }

    function redireccionar($texto, $url_a_redireccionar) {
        echo "<script type='text/javascript'>
                console.log('$texto');
                window.location.href='$url_a_redireccionar';
        </script>";
    }

   function agregar() {
        $datos = validar_usuario();

        $usuario_nuevo = new Usuario($datos['nombre'], $datos['apellido_paterno'], $datos['apellido_materno'], $datos['cargo']);
        $usuario_nuevo->agregar_usuario();
        redireccionar('Usuario Agregado...', 'http://localhost:8080/CRUDPhp2/index.php');
   }

   function eliminar() {
       $id_usuario = $_GET['id_eliminar'];
       $user_new = new Usuario(null, null, null, null);
       $user_new->eliminar_usuario($id_usuario);
       redireccionar('Usuario Eliminado...', 'http://localhost:8080/CRUDPhp2/vistas/bajas.php');
   }

   function modificar() {
       $id_modificar = $_GET['id'];
       $datos = validar_usuario();


       $usuario_nuevo = new Usuario($datos['nombre'], $datos['apellido_paterno'], $datos['apellido_materno'], $datos['cargo']);
       $usuario_nuevo->modificar_usuario($id_modificar);
       redireccionar('Usuario Actualizado...', 'http://localhost:8080/CRUDPhp2/index.php');
   }

   if(isset($_GET['alta_formulario']))
   {
       agregar();
   }

   if(isset($_GET['id_eliminar'])) {
      eliminar();
   }

   if(isset($_GET['modificar_formulario'])) {
       modificar();
   }