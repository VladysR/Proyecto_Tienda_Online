<?php

    require_once("Controlador_Registro.php");
    require_once("DTO_Cliente.php");

    $controlador_registro = new Controlador_Registro();

     //Validaciones en funciones

     function validate_Nombre_Apellido($nombre){
        //Cualquier letra y retorna el valor o null
        $rgx = "/^[a-zA-Z]+$/";
        
        if (trim($nombre).preg_match($rgx,$nombre)) {
            return $nombre;
        } else {
            return null;
        }
    }

    function validate_telefono($numero){
        // Solo 9 digitos
        $rgx = "/^\d{9}$/";
        
        if (trim($numero).preg_match($rgx,$numero)) {
            return $numero;
        } else {
            return null;
        }
    }

    function validate_nickname($nickname){
        // Cualquier letra y numero
        $rgx = "/^[a-zA-Z0-9]+$/";
        
        if (trim($nickname).preg_match($rgx,$nickname)) {
            return $nickname;
        } else {
            return null;
        }
    }

    function validate_pwd($pwd){
        // Entre 8 y 20 de longitud con letras y numeros
        $rgx = "/^[a-zA-Z0-9]{8,20}$/";
        
        if (trim($pwd).preg_match($rgx,$pwd)) {
            return $pwd;
        } else {
            return null;
        }
    }


    // COMIENZO DEL CONTROLADOR

    if($_SERVER["METHOD"] === $_POST){

        $action = $_POST["registrar"]; 

        if ($action === "registrar"){

            $cliente = new DTO_Cliente(
                validate_Nombre_Apellido($_POST["nombre"]), 
                validate_Nombre_Apellido($_POST["apellido"]), 
                $_POST["domicilio"], // Hay que ver que hacer con esto
                validate_telefono($_POST["telefono"]), 
                validate_nickname($_POST["nickname"]), 
                validate_pwd($_POST["pwd"])
            );

                if( // Si alguna de las propiedades es null, vuelve al registro Y MOSTRARA en cual esta el error(FALTA TERMINAR)
                    $cliente->getNombre() === null ||
                    $cliente->getApellido() === null ||
                    $cliente->getDomicilio() === null ||
                    $cliente->getTelefono() === null ||
                    $cliente->getNickname() === null ||
                    $cliente->getpwd() === null
                    ){

                        header("Location:../vistas/Registro_FORM.html");

                } else {

                    $controlador_registro->controlador_addCliente( $cliente);
                }
            
        }

    } else {

        header("Location:../vistas/Registro_FORM.html");
    }

    