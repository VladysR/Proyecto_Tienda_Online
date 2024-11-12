<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] === "POST") {   

    

    switch ($_POST["accion"]) 
    {
        case 'AñadirProducto':
            header('Location:../vistas/Add_FORM.html');
            break;

        case 'ListarProductos':
            header("Location:../vistas/listar_Productos.php");
            break;

        case 'ModificarProducto':
            header('Location:../vistas/Modificar_FORM.html');
            break;

        case 'EliminarProducto':
            header('Location:../vistas/Eliminar_FORM.html');
            break;
        
        
    }
    
} else {
    header("Location:../vistas/index.html");
}