<?php

require_once("Controlador_Eliminar.php");
require_once("../modelos/DTO_Producto.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['add'];

    if ($action == 'Eliminar') {
        
        $Controlador_Eliminar = new Controlador_Eliminar();
        $Controlador_Eliminar->eliminar_Producto($_POST['id']);
    }
    
} else {
    header('Location:../vistas/Eliminar.php');
}