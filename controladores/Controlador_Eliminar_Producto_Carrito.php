<?php
session_start();
class Controlador_Eliminar_Producto_Carrito{
    public function producto_existe($id){
        foreach ($_SESSION["carrito"] as $producto) { 
            if($id == $producto){
                return true;
            }
        }
        return false;
    }
    public function controlador_delProducto_Carrito ($id){
        if($this->producto_existe($id)){
            unset($_SESSION["carrito"][array_search($id,$_SESSION["carrito"])]);
            header("Location:../vistas/carrito.php");
        }else{
            header("Location:../vistas/listar_Productos.php?aviso=El producto no existe");}
        }

    } 