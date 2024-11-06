<?php

    require_once("Controlador_Registro.php");
    require_once("DTO_Cliente.php");

    $controlador_registro = new Controlador_Registro();

    if($_SERVER["METHOD"] === $_POST){

        $action = $_POST["registrar"]; //Registra el boton de registrarse

        if ($action === "registrar"){

            $cliente = new DTO_Cliente($_POST["nombre"], $_POST["apellido"], $_POST["domicilio"], $_POST["telefono"], $_POST["nickname"], $_POST["pwd"]);

            $controlador_registro->controlador_addCliente( $cliente );

            
            
        }

    } else {
        
        header("Location:../vistas/Registro_FORM.html");
    }

    