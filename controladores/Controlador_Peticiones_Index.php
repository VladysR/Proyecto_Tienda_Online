<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] === "POST") {   

    

    switch ($_POST["accion"]) 
    {
        case 'AñadirProducto':
            header('Location:../vistas/Add_FORM.php');
            break;

        case 'ListarProductos':
            header("Location:../vistas/listar_Productos.php");
            break;

        case 'ModificarProducto':
            header('Location:../vistas/Modificar_FORM.php');
            break;

        case 'EliminarProducto':
            header('Location:../vistas/Eliminar_FORM.php');
            break;

        case 'cerrarSesion':
            session_destroy();
            header('Location:../vistas/login_FORM.php');
            break;
        case 'carrito':
            header("Location:../vistas/carrito.php");
            break;
        
    }
    
} else {
    header("Location:../vistas/index.php");
}