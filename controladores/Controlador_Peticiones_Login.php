<?php

    require_once("Controlador_Login.php");

    $controlador_login = new Controlador_Login();
// COMIENZO CONTROLADOR
    

if($_SERVER["REQUEST_METHOD"] === "POST"){

        $action = $_REQUEST["login"];

        if ($action === "Enviar"){
            if (
                $_POST["usuario"] == "" ||
                $_POST["password"] == ""
            ){
                header("Location:../vistas/Login_FORM.html");
            }else{
                $controlador_login->controlador_entrar($_POST["usuario"],$_POST["password"]);
                header('Location:../vistas/index.php');
            }
        }
} else {
    header("Location:../vistas/Login_FORM.html");
}