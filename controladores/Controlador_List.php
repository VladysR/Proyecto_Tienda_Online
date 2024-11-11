<?php
require_once("../modelos/DAO_Producto.php");


class  Controlador_List{

    private $producto_DAO;
    

    public function __construct() {
        $this->producto_DAO = new DAO_Producto();
    }

    public function get_list(){

        return $this->producto_DAO->getAllProductos();
           
    }


}