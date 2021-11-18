<?php
    // include_once('BDO');

    class Usuarios{

        private $nombre, $apellido_paterno, $apellido_materno, $cargo;

        public function __construct($nombre, $apellido_paterno, $apellido_materno, $cargo) {
            $this->nombre = $nombre; 
            $this->apellido_paterno = $apellido_paterno; 
            $this->apellido_materno = $apellido_materno; 
            $this->cargo = $cargo;
        }

        public function __construct1($nombre) {
            $this->nombre = $nombre;
        }

        public function __construct2($apellido_paterno, $apellido_materno) {
            $this->apellido_paterno = $apellido_paterno;
            $this->apellido_materno = $apellido_materno;
        }

        public function __construct3($cargo) {
            $this->cargo = $cargo;
        }

        public function agregar_usuario() {
            //CONSULTA PARA AGREGAR USUARIO
        }

        public function leer_usuario() {
            //CONSULTA PARA LEER USUARIO
        }

        public function modificar_usuario () {
            //CONSULTA PARA MODIFICAR USUARIO
        }

        public function eliminar_usuario() {
            //CONSULTA PARA ELIMINAR USUARIO
        }

    }
