<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] === "POST") {   

    $id=$_POST["id"];

    switch ($_POST["accion"]) 
    {
        case 'Comprar':
            
            header("Location:../controladores/Controlador_Peticiones_Finalizar_Compra.php?id=$id");
            break;

        case 'Vacíar carrito':
            header("Location:../controladores/Controlador_Peticiones_Borrar_Carrito.php?id=$id");
            break;

        case '+':
            header("Location:../controladores/Controlador_Peticiones_Add_Carrito.php?id=$id");
            break;

        case '-':
            header("Location:../controladores/Controlador_Peticiones_Eliminar_Producto_Carrito.php?id=$id");
            break;
        
    }
    
} else {
    header("Location:../vistas/index.php");
}