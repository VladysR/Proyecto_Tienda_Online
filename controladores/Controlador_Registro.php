<?php
require_once("../DAO_Cliente");

class Controlador_Registro {

    private $cliente_DAO;

    function __construct() {
        $this->cliente_DAO = new DAO_Cliente();
    }

    // Controlador addCliente que recibe un objeto cliente e invoca el DAO, devuelve true si se crea, si no devuelve false.
    public function controlador_addCliente($cliente) {
        if ($this->cliente_DAO->addCliente($cliente)){

            return true;
        } 
        
        return false;
    }
}