<?php
require_once("Controlador_Add_Carrito.php");

$controlador_add_carrito = new Controlador_Add_Carrito();


    $controlador_add_carrito->controlador_addProducto_Carrito($_POST["id"]);

    
    

