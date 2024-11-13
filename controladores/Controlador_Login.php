<?php
require_once("../modelos/DAO_Cliente.php");

class Controlador_Login{
    private $cliente_DAO;
    public function __construct() {
        $this->cliente_DAO = new DAO_Cliente();
    }
    public function nickname_existe($nickname){
        if ($this->cliente_DAO->getClienteByNickname($nickname) === null) {
            return false;
        }else{
            return true;
        }
    }
    public function pwd_coincide($nickname,$pwd){
        if($this->cliente_DAO->getClienteByNickname($nickname)->getPwd() == $pwd){
            return true;
        }else{
            return false;
        }
    }
    //Controlador entrar recibe nickname y contraseña, comprueba si existe el nickname,si true comprueba si la contraseña existe si false hace mirror, si la contraseña concide pasa al index sino hace mirror.

    public function controlador_entrar($nickname,$pwd){
        if($this->nickname_existe($nickname)){
            if($this->pwd_coincide($nickname,$pwd)){
                header("Location:../vistas/index.php");

            }else{

                header("Location:../vistas/Login_FORM.html");
            }
        }else{
            header("Location:../vistas/Login_FORM.html");
        }
    }
}