<?php
    namespace modelo;
    
     include '../PDO/Conexion.php';
     use \PDO\Conexion;

    class Usuario {

        private $nombre, $apellido_paterno, $apellido_materno, $cargo;
        private $conn;

        function __construct($nombre, $apellido_paterno, $apellido_materno, $cargo) {
            $this->nombre = $nombre; 
            $this->apellido_paterno = $apellido_paterno; 
            $this->apellido_materno = $apellido_materno; 
            $this->cargo = $cargo;
            $conexion = new Conexion();
            $this->conn = $conexion->obtener_onexion();
        }

         public function __construct1($nombre) {
             $this->nombre = $nombre;
         }

         public function __construct2($apellido_paterno, $apellido_materno) {
             $this->apellido_paterno = $apellido_paterno;
             $this->apellido_materno = $apellido_materno;
         }


         public function __construct3($apellido_materno) {
            $this->apellido_paterno = $apellido_materno;
         }

        public function __construct4($apellido_paterno) {
            $this->apellido_paterno = $apellido_paterno;
        }

        public function __construct5($cargo) {
             $this->cargo = $cargo;
         }

        function agregar_usuario() {
            $data = array(
                $this->nombre,
                $this->apellido_paterno,
                $this->apellido_materno,
                $this->cargo,
            );
            try {
                $sql = $this->conn->prepare("INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, cargo) 
                    VALUES(?, ?, ?, ?);");
                $sql->execute($data);
            }catch(Exception $e) {
                echo $e;
            }
        }

        public function leer_usuario() {
            try{
                $sql = $this->conn->prepare("SELECT * FROM usuarios");
                $sql->execute();
                $resultado = $sql->fetchAll();
                return $resultado;
            }catch(Exception $e) {
                echo $e;
            }
        }

        public function modificar_usuario ($id) {
            try{
                $sql = $this->conn->prepare("UPDATE usuarios WHERE id = $id "); //CONDICION EJEMPLO "WHERE id=1"
                $sql->execute();
                return true;
            }catch(Exception $e) {
                echo $e;
            }
        }

        public function eliminar_usuario($id, $array) {
            try{
                $sql = $this->conn->prepare("UPDATE usuarios WHERE id = $id "); //CONDICION EJEMPLO "WHERE id=1"
                $sql->execute();
                return true;
            }catch(Exception $e) {
                echo $e;
            }
        }

    }


