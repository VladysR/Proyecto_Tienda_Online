<?php
require_once('../modelos/DAO_Producto.php');

class Controlador_Eliminar{

    private $producto_DAO;
    
    public function __construct(){  
        $this->producto_DAO = new DAO_Producto();
    }

    public function eliminar_Producto($id){
         

        if($this->producto_DAO->getProductoById($id) === null){

            header('Location:../vistas/Eliminar_FORM.php');

        } else {

            $this->producto_DAO->deleteProducto($id);
            
            header('Location:../vistas/index.php');

        }

    }   
}
