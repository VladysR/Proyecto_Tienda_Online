<?php
require_once("Controlador_List.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {

   
    $list = new Controlador_List();
   

    $action = $_POST["accion"];

    switch ($action) {
        case 'AñadirProducto':
            header('Location:../vistas/Add_FORM.php');
            break;

        case 'ListarProductos':
            $list->listAll();
            break;

        case 'ModificarProdcuto':
            header('Location:../vistas/Modificar_FORM.php');
            break;

        case 'EliminarProducto':
            header('Location:../vistas/Eliminar_FORM.php');
            break;
        
        
    }
    
} else {
    header("Location:../vistas/index.html");
}