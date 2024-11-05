<?php
    require_once("Connect.php");
    require_once("DTO_Producto.php");
    class DAO_Producto{

        private $conexion;
        private $nombreTabla = "producto";
        
        public function __construct() {
            $this->conexion = Connect::getConnection();
        }

        //GETALL -> Devuelve todos los productos de la bd en un array de objetos DTO_Producto
        public function getAllProductos(){
    
                $query = $this->conexion->prepare("SELECT * FROM $this->nombreTabla");
                $query->execute();
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $productos = [];
    
                while ($result->fetch(PDO::FETCH_ASSOC)) {
    
                    $producto = new DTO_Producto($result["nombre"], $result["descripcion"], $result["precio"]);
    
                    $productos[] = $producto;
                }

            return $productos;
        }

        //GET by id -> Devuelve el objeto producto del id pedido
        public function getProductoById($id){

            $query = $this->conexion->prepare("SELECT * FROM $this->nombreTabla WHERE id = :id");
            $query->bindParam(":id", $id);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
        
            while ($result->fetch(PDO::FETCH_ASSOC)) {

                $producto = new DTO_Producto($result["nombre"], $result["descripcion"], $result["precio"]);
                $producto->setId($result["id"]);
            }

            return $producto;
        }

        //GET by name -> Devuelve el objeto producto del name pedido
        public function getProductoByName($nombre){

            $query = $this->conexion->prepare("SELECT * FROM $this->nombreTabla WHERE nombre = :nombre");
            $query->bindParam(":nombre", $nombre);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
        
            while ($result->fetch(PDO::FETCH_ASSOC)) {

                $producto = new DTO_Producto($result["nombre"], $result["descripcion"], $result["precio"]);
                
                $producto->setId($result["id"]);
            }

            return $producto;
        }

        //INSERT -> Retorna T || F si se ha ejecutado correctamente la query
        public function addProducto($producto){

            $query=$this->conexion->prepare("INSERT INTO $this->nombreTabla (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)");
            $query->bindParam(":nombre",$producto->getNombre());
            $query->bindParam(":descripcion",$producto->getDescripcion());
            $query->bindParam(":precio",$producto->getPrecio());

            return $query->execute();
        }
        

        //UPDATE -> Retorna T || F si se ha ejecutado correctamente la query
        public function updateProducto($producto){
            
            $query=$this->conexion->prepare("UPDATE $this->nombreTabla SET (nombre = :nombre, descripcion = :descripcion, precio = :precio) WHERE (id = :id)");
            $query->bindParam(":nombre",$producto->getNombre());
            $query->bindParam(":descripcion",$producto->getDescripcion());
            $query->bindParam(":precio",$producto->getPrecio());

            return $query->execute();
        }

        //DELETE-> Retorna T || F si se ha ejecutado correctamente la query

        public function deleteProducto($id){
            $query=$this->conexion->prepare("DELETE FROM $this->nombreTabla WHERE id = :id");
            $query->bindParam("id",$id);
            return $query ->execute();
        }
}