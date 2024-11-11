<?php

    require_once("Controlador_Login.php");
    require_once("../modelos/DAO_Cliente.php");

    $controlador_login = new Controlador_Login();
// COMIENZO CONTROLADOR
    

if($_SERVER["REQUEST_METHOD"] === "POST"){

        $action = $_REQUEST["login"];

        if ($action === "Enviar"){
            if (
                $_POST["usuario"] == "" ||
                $_POST["password"] == ""
            ){
                header("Location:../vistas/Login_FORM");
            }else{
                $controlador_login->controlador_entrar($_POST["usuario"],$_POST["password"]);
            }
        }
} else {
    header("Location:../vistas/Login_FORM");
}