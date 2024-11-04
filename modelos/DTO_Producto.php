<?php 

class DTO_Producto{

    private $id;
    private $nombre;
    private $descripcion; // Puede ser null
    private $precio;
    private $cliente_id; // Puede ser null

    public function __construct($id, $nombre, $descripcion, $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }
    // Validaciones varias -------------------------------------------------------------
    

     // Setters -------------------------------------------------------------

     public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

   public function setCliente_id($cliente_id){
        $this->cliente_id = $cliente_id;
   }


    // Getters -------------------------------------------------------------
    public function getId() {       
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getCliente_id() {
        return $this->cliente_id;
    }
    
    }

