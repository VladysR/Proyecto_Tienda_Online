<?php
require_once("../modelos/DAO_Producto.php");

class Controlador_Add{
    private $producto_DAO;

    public function __construct() {
        $this->producto_DAO = new DAO_Producto();
    }
    //Comprueba si se repite el nombre, y devuelve true si se repite y false si no
    public function nombre_repetido($nombre){
        if ($this->producto_DAO->getProductoByName($nombre)!= null) {
            return true;
        }else {
            return false;
        }
    }

    public function controlador_addProducto ($producto){
        if (!$this->nombre_repetido($producto->getNombre())){ 

            if ($this->producto_DAO->addProducto($producto)) {

                header("Location:../vistas/index.php?aviso= El producto fue añadido con éxito");

            }else{

                header("Location:../vistas/Add_FORM.php");}
        }else {

        header("Location:../vistas/Add_FORM.php");
        }

        }
}