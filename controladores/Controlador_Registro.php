<?php
require_once("../DAO_Cliente.php");

class Controlador_Registro {

    private $cliente_DAO;

    function __construct() {
        $this->cliente_DAO = new DAO_Cliente();
    }

    // Controlador addCliente que recibe un objeto cliente e invoca el DAO, devuelve true si se crea, si no devuelve false.
    public function controlador_addCliente($cliente) {

     if ($this->cliente_DAO->addCliente($cliente)) {
        header("Location:../vistas/Login.html");

     } else {

        //Mandar que cambios tiene mal -----------------------------
        header("Location:../vistas/RegistroForm.html");
     } 

    }
}