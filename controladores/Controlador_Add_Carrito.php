<?php
session_start();
class Controlador_Add_Carrito{
    public function producto_Repetido($id){
        foreach ($_SESSION["carrito"] as $producto) { 
            if($id == $producto){
                return true;
            }
        }
        return false;
    }
    public function controlador_addProducto_Carrito ($id){
        if(!$this->producto_Repetido($id)){
            array_push($_SESSION["carrito"],$id);
            header("Location:../vistas/listar_Productos.php");
        }else{
            header("Location:../vistas/listar_Productos.php?aviso=No puedes añadir el mismo producto 2 veces");}
        }
}