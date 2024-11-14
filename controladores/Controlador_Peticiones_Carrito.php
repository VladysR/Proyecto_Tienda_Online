<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] === "POST") {   

    

    switch ($_POST["accion"]) 
    {
        case 'Comprar':
            header('Location:../controladores/Controlador_Peticiones_Finalizar_Compra.php');
            break;

        case 'Vacíar carrito':
            header("Location:../controladores/Controlador_Peticiones_Borrar_Carrito.php");
            break;

        case '+':
            header('Location:../controladores/Controlador_Peticiones_Add_Carrito.php');
            break;

        case '-':
            header('Location:../controladores/Controlador_Peticiones_Eliminar_Producto_Carrito.php');
            break;
        
    }
    
} else {
    header("Location:../vistas/index.php");
}