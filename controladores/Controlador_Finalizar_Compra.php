<?php
session_start();
require_once("../modelos/DAO_Producto.php");
class Controlador_Finalizar_Compra{
    
    private $DAO_producto;
    private $productos;
  public function __construct() {
    $this->DAO_producto = new DAO_Producto();
    $this->productos = $_SESSION["carrito"];
}

  public function finalizar_compra($id){
    foreach($this->productos as $producto){
        $producto = $this->DAO_producto->getProductoById($producto);
        $this->DAO_producto->updateProductoCarrito($producto,$id);
    }
    unset($_SESSION["carrito"]);
    $_SESSION["carrito"] = [];
    header("Location:../vistas/carrito.php");
  }
}