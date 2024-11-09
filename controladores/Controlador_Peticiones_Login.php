<?php

    require_once("Controlador_Registro.php");
    require_once("DAO_Cliente.php");
    $controlador_login = new Controlador_Login;
// COMIENZO CONTROLADOR
    if($_SERVER["METHOD"] === $_POST){
        $action = $_POST["login"];
        if ($action === "login"){
            if (
                $_POST["usuario"] == "" ||
                $_POST["password"] == ""
            ){
                header("Location:../vistas/Login_FORM");
            }else{
                $controlador_login->controlador_entrar($_POST["usuario"],$_POST["password"]);
            }
        }
    }