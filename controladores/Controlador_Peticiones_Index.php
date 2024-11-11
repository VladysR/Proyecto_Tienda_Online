<?php
require_once("Controlador_List.php");


if ($_SERVER["REQUEST_METHOD" === "POST"]) {

   
    $list = new Controlador_List();
   

    $action = $_POST["accion"];

    switch ($action) {
        case 'AñadirProducto':
            header('Location:Add_FORM.html');
            break;

        case 'ListarProductos':
            //Recibe producto para listar
            break;

        case 'ModificarProdcuto':
            header('Location:Modificar_FORM.html');
            break;

        case 'EliminarProducto':
            header('Location:Eliminar_FORM.html');
            break;
        
        
    }
    
} else {
    header("Location:../vistas/index.html");
}