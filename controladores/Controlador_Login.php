<?php
require_once("../DAO_Cliente.php");

class Controlador_Login{
    private $cliente_DAO;
    public function __construct() {
        $this->cliente_DAO = new DAO_Cliente();
    }
    public function nickname_no_existe($nickname){
        if ($this->cliente_DAO->getClienteByNickname
        ($nickname) === null) {
            return false;
        }else{
            return true;
        }
    }
    public function pwd_no_coincide($nickname,$pwd){
        if($this->cliente_DAO->getClienteByNickname
        ($nickname)->getpwd() === $pwd){
            return false;
        }else{
            return true;
        }
    }
    //Controlador entrar recibe nickname y contraseña, comprueba si existe el nickname,si true comprueba si la contraseña existe si false hace mirror, si la contraseña concide pasa al index sino hace mirror.

    public function controlador_entrar($nickname,$pwd){
        if(!$this->nickname_no_existe($nickname)){
            if(!$this->pwd_no_coincide
            ($nickname,$pwd)
            ){
                header("Location:../vistas/index.html");
            }else{
                header("Location:../vistas/Login_FORM.html");
            }
        }else{
            header("Location:../vistas/Login_FORM.html");
        }
    }
}