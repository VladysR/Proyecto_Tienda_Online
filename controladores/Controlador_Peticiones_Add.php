<?php
require_once("Controlador_Add.php");
require_once("../modelos/DTO_Producto.php");

$controlador_add=new Controlador_Add();

//function validate_precio($precio)
// {
//     if (preg_match('/^\d+(\.\d{2})?$/', $precio)) {
//         return $precio;
//     } else {
//         return null;
//     }
// }

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $action = $_POST["add"];

    if($action === "Añadir"){
        $producto = new DTO_Producto($_POST["nombre"],$_POST["descripcion"],$_POST["precio"]);
    };
    if(
        $producto->getNombre() === null ||
        $producto->getPrecio() === null ||
        $producto->getDescripcion() === null
    ){
        header("Location:../vistas/Add_FORM.php");
    }else {
        $controlador_add->controlador_addProducto($producto);
        header("Location:../vistas/Add_FORM.php");
    }
} header("Location:../vistas/Add_FORM.php");