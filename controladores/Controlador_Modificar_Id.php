<?php
require_once("../modelos/DAO_Producto.php");
class Controlador_Modificar_Id{
    private $producto_DAO;

    public function __construct() {
        $this->producto_DAO = new DAO_Producto();
    }

    //Compruebo si existe, si existe saco el objeto y lo desgloso en variables y esas variables las paso por un header (Sin sesiones no se pueden pasar objetos),si no hago mirror con alerta
    public function id_existe($id){
     if($this->producto_DAO->getProductoById($id)!=null){
        $producto=$this->producto_DAO->getProductoById($id);
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        header("Location:../vistas/ModificarAtributos_FORM.php?id=$id&&nombre=$nombre&&descripcion=$descripcion&&precio=$precio");
     }else{
        header("Location:../vistas/Modificar_FORM.html?aviso=Producto con ese id no existe");
     }
    }
}