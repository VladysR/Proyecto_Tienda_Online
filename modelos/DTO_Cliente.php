<?php 

    class DTO_Cliente{
        private $id;
        private $nombre;
        private $apellido;
        private $domicilio; // Puede ser null segun la base de datos
        private $telefono; // Puede ser null segun la base de datos
        private $nickname;
        private $pwd;

        public function __construct($nombre, $apellido, $domicilio, $telefono, $nickname, $pwd) {
            $this->id = null; 
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->domicilio = $domicilio;
            $this->telefono = $telefono;
            $this->nickname = $nickname;
            $this->pwd = $pwd;
        }

        // Setters -------------------------------------------------------------

        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setDomicilio($domicilio){
            $this->domicilio = $domicilio;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function setNickname($nickname){
            $this->nickname = $nickname;
        }

        public function setPwd($pwd){
            $this->pwd = $pwd;
        }


        // Getters -------------------------------------------------------------
        public function getId() {       
            return $this->id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
         }

        public function getDomicilio() {
            return $this->domicilio;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function getNickname() {
            return $this->nickname;
        }

        public function getpwd() {
            return $this->pwd;
        }
    }