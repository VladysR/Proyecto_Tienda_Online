<?php

    require_once("Controlador_Registro.php");
    require_once("../modelos/DTO_Cliente.php");

    $controlador_registro = new Controlador_Registro();

     //Validaciones en funciones

     function validate_Nombre_Apellido($nombre){
        //Cualquier letra y retorna el valor o null
        $rgx = "/^[a-zA-Z]+$/";
        
        if (preg_match($rgx,trim($nombre))) {
            return $nombre;
        } else {
            return null;
        }
    }

    function validate_telefono($numero){                                                                            //ESTA VALIDACION NO FUNCIONA
        // Solo 9 digitos
        $rgx = "/^\d{9}$/";
        
        if (preg_match($rgx,trim($numero))) {
            return $numero;
        } else {
            return null;
        }
    }

    function validate_nickname($nickname){
        // Cualquier letra y numero
        $rgx = "/^[a-zA-Z0-9]+$/";
        
        if (preg_match($rgx,trim($nickname))) {
            return $nickname;
        } else {
            return null;
        }
    }

    function validate_pwd($pwd){
        // Entre 8 y 20 de longitud con letras y numeros
        $rgx = "/^[a-zA-Z0-9]{8,20}$/";
        
        if (preg_match($rgx,trim($pwd))) {
            return $pwd;
        } else {
            return null;
        }
    }


    // COMIENZO DEL CONTROLADOR

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $action = $_POST["registrar"]; 

        if ($action === "Registrar"){

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
                        $nombre = ($cliente->getNombre() === null) ? 'Solo letras y numeros' : $cliente->getNombre();

                        $apellido = ($cliente->getApellido() === null) ? 'Solo letras y numeros' : $cliente->getApellido();

                        $telefono = ($cliente->getTelefono() === null) ? 'Telefono de 9 digitos' : $cliente->getTelefono();

                        $nickname = ($cliente->getNickname() === null) ? 'Solo letras y numeros' : $cliente->getNickname();

                        $pwd = ($cliente->getPwd() === null) ? 'Entre 8 y 20 carácteres' : $cliente->getPwd();

                        $domicilio = ($cliente->getDomicilio() === null) ? '' : $cliente->getDomicilio();


                        //AVISAR DE CUAL ES LA NULL
                header("Location:../vistas/Registro_FORM.php?nombre=$nombre&apellido=$apellido&telefono=$telefono&nickname=$nickname&pwd=$pwd&domicilio=$domicilio");

                } else {

                    $controlador_registro->controlador_addCliente( $cliente);
                    header("Location:../vistas/Login_FORM.php");
                }
            
        }

    } else {

        header("Location:../vistas/Login_FORM.php");
    }

    