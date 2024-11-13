<?php
require_once("../modelos/DAO_Producto.php");
class Controlador_Modificar{
    private $producto_DAO;

    public function __construct() {
        $this->producto_DAO = new DAO_Producto();
    }
    public function modificar($id,$nombre,$descripcion,$precio){
        $producto = new DTO_Producto($nombre,$descripcion,$precio);
        $producto->setId($id);
        if($this->producto_DAO->updateProducto($producto)){
            header("Location:../vistas/index.php?aviso= El producto fue modificado con exito");
        }else{
            header("Location:../vistas/Modificar_FORM.php?aviso= Hubo un error al introducir los datos por favor vuelva a intentar");
        }
    }
}