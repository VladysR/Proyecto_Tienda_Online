<?php
require_once("Location:Controlador_Eliminar_Producto_Carrito.php");

$controlador_eliminar_carrito = new Controlador_Eliminar_Producto_Carrito();

$controlador_eliminar_carrito->controlador_delProducto_Carrito($_POST["id"]);