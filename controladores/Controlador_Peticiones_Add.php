<?php
require_once("Controlador_Add.php");
require_once("../modelos/DTO_Producto.php");

$controlador_add=new Controlador_Add();

function validate_precio($precio)
 {
    $rgx='/^\d+(\.\d{2})?$/';
     if (preg_match($rgx, trim($precio))) {
         return $precio;
    } else {
         return null;
    }
}
function validate_nombre($nombre){
    $rgx = '/^[a-zA-Z0-9\s\-\'\(\)]{3,100}$/';

    if(preg_match($rgx,trim($nombre))){
        return $nombre;
    } else{
        return null;
    }
}

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $action = $_POST["add"];

    if($action === "Añadir"){
        $producto = new DTO_Producto(
            validate_nombre($_POST["nombre"]),
            $_POST["descripcion"],
            validate_precio($_POST["precio"])
        );

            if(
                $producto->getNombre() === null ||
                $producto->getDescripcion() === null ||
                $producto->getPrecio() === null
            ){
                $nombre = ($producto->getNombre() === null) ? "Debe ser mayor a 3 y menor a 100 y no llevar caracteres especiales" : $producto->getNombre();
                $descripcion = ($producto->getDescripcion()===null) ? " " : $producto->getDescripcion();
                $precio = ($producto->getPrecio()===null) ? "El precio tiene como maximo 2 decimales" : $producto->getPrecio();

                header("Location:../vistas/Add_FORM.php?nombre=$nombre&descripcion=$descripcion&precio=$precio");
            }else{
                $controlador_add->controlador_addProducto($producto);
            }

        
    }        
    
} else {header("Location:../vistas/Add_FORM.php");}