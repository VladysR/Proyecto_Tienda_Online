<?php
require_once("Controlador_Add_Carrito.php");

$controlador_add_carrito = new Controlador_Add_Carrito();

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $action = $_POST["accion"];

    if($action === "+"){
    $controlador_add_carrito->controlador_addProducto_Carrito($_POST["id"]);
    }else{
        header("Location:../vistas/listar_productos.php.php");
    }
    
} else {
    header("Location:../vistas/listar_productos.php.php");
}