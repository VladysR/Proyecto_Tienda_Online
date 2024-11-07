<?php
require_once("../DAO_Cliente.php");


class Controlador_Registro {

    private $cliente_DAO;

    function __construct() {
        $this->cliente_DAO = new DAO_Cliente();
    }

    public function nickname_repetido($nickname){

        if($this->cliente_DAO->getClienteByNickname($nickname) === null){
            return false;
        } else {
            return true;
        }

        
    }

    // Controlador addCliente que recibe un objeto cliente e invoca el DAO, devuelve true si se crea, si no devuelve false.
    // Primero comprueba que el nickname no este repetido
    public function controlador_addCliente($cliente) {        

        if (!$this->nickname_repetido($cliente)) {

            if ($this->cliente_DAO->addCliente($cliente)) {
                header("Location:../vistas/Login.html");
        
             } else {
        
                //No deberia llegar porque se valida en el controlador de peticiones registro
                header("Location:../vistas/RegistroForm.html");
             } 

        } else {
            //Te manda a registro porque el nickname esta repetido
            header("Location:../vistas/RegistroForm.html");
        }

    }

   

}