<?php
require_once("Controlador_Modificar.php");
require_once("../modelos/DAO_Producto.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $action = $_POST["update"];
    if ($action == "ModificarAttr"){
        $controlador = new Controlador_Modificar();
        $controlador->modificar($_POST["id"],$_POST["nombre"],$_POST["descripcion"],$_POST["precio"]);
      
    }else{
        header("Location:../vistas/Modificar_FORM.php?aviso=Ha ocurrido un error imprevisto");
    }
}else{header("Location:../vistas/Modificar_FORM.php?aviso=Ha ocurrido un error imprevisto");}