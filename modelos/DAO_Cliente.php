<?php
require_once("Connect.php");
require_once("DTO_Cliente");

class DAO_Cliente{
    private $conexion;
    private $nomTabla = "cliente";

    public function __construct() { //Conexion
        $this->conexion = Connect::getConnection();
    }
    //Obtener solo 1 cliente
    //Retorna el objeto o null
    public function getClienteById($id){ //Por id
        $stmt = $this->conexion->prepare("SELECT * FROM $this->nomTabla WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
           $cliente = new DTO_Cliente($fila["nombre"], $fila["apellido"], $fila["domicilio"], $fila["telefono"], $fila["nickname"], $fila["pwd"]);
           $cliente->setId($fila["id"]); 
           return $cliente; 
        } else {
            return null; // Si no se encuentra, devolvemos null
        }

    }
    public function getClienteByNickname($nickname){ //Por nickname
        $stmt = $this->conexion->prepare("SELECT * FROM $this->nomTabla WHERE nickname = :nickname");
        $stmt->bindParam(':nickname', $nickname);
        $stmt->execute();
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            $cliente = new DTO_Cliente($fila["nombre"], $fila["apellido"], $fila["domicilio"], $fila["telefono"], $fila["nickname"], $fila["pwd"]);
            $cliente->setId($fila["id"]); 
            return $cliente;
        } else {
            return null; // Si no se encuentra, devolvemos null
        }
    }
    //Obtener todos clientes
    //Devuelve array de todos los clientes
    public function getAllClientes(){
        $stmt=$this->conexion->prepare("SELECT * FROM $this->nomTabla");
        $stmt->execute();
        $resultados=$stmt->fetchall(PDO::FETCH_ASSOC);
        $clientes=[];
        foreach($resultados as $fila) {
            $cliente = new DTO_Cliente($fila["id"], $fila["nombre"], $fila["apellido"], $fila["domicilio"], $fila["telefono"], $fila["nickname"], $fila["pwd"]);
            $clientes+=$cliente;
        }
        return $clientes; 
    }
    //Añadir cliente
    //Devuelve booleano
    public function addCliente($cliente){
        $stmt=$this->conexion->prepare("INSERT INTO $this->nomTabla (nombre, apellido, domicilio, telefono, nickname, pwd) VALUES(:nombre, :apellido, :domicilio, :telefono, :nickname, :pwd)");
        $stmt=bindParam(":nombre",$cliente->getNombre());
        $stmt=bindParam(":apellido",$cliente->getApellido());
        $stmt=bindParam(":domicilio",$cliente->getDomicilio());
        $stmt=bindParam(":telefono",$cliente->getTelefono());
        $stmt=bindParam(":nickname",$cliente->getNickname());
        $stmt=bindParam(":pwd",$cliente->getPwd());
        return $stmt->execute();
    }
    //Actualizar cliente
    //Devuelve booleano
    public function updateCliente($cliente){
        $stmt=$this->conexion->prepare("UPDATE $this->nomTabla SET nombre = :nombre, apellido = :apellido, domicilio = :domicilio, telefono = :telefono, nickname = :nickname, pwd = :pwd WHERE id = :id");
        $stmt=bindParam(":nombre",$cliente->getNombre());
        $stmt=bindParam(":apellido",$cliente->getApellido());
        $stmt=bindParam(":domicilio",$cliente->getDomicilio());
        $stmt=bindParam(":telefono",$cliente->getTelefono());
        $stmt=bindParam(":nickname",$cliente->getNickname());
        $stmt=bindParam(":pwd",$cliente->getPwd());
        $stmt=bindParam(":id",$cliente->getId());
        return $stmt -> execute();
    }
    //Borrar cliente
    //Devuelve booleano
    public function deleteCliente($id){
        $stmt=$this->conexion->prepare("DELETE FROM $this->nomTabla WHERE id = :id");
        $stmt->bindParam("id",$id);
        return $stmt ->execute();
    }

}


