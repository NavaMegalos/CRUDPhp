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
            $this->conn = $conexion->obtener_conexion();
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
            echo $this->cargo;
            try{
                $sql = "UPDATE usuarios 
                        SET nombre=?, apellido_paterno=?, apellido_materno=?, cargo=? 
                        WHERE id=?"; //CONDICION EJEMPLO "WHERE id=1"
                $this->conn->prepare($sql)->execute([$this->nombre, $this->apellido_paterno, $this->apellido_materno, $this->cargo, $id]);
                echo "despues de..";
            }catch(Exception $e) {
                echo $e;
            }
        }

        public function eliminar_usuario($id) {
            try{
                $sql = $this->conn->prepare("DELETE FROM usuarios WHERE id = $id ");
                $sql->execute();
            }catch(Exception $e) {
                echo $e;
            }
        }

    }


