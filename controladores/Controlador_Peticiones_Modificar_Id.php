<?php
require_once("Controlador_Modificar_Id.php");
require_once("../modelos/DAO_Producto.php");


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $action = $_POST["update"];
    if ($action == "Modificar"){
        $controlador_id = new Controlador_Modificar_Id();
        $controlador_id->id_existe($_POST["id"]);
      
    }else{
        header("Location:../vistas/Modificar_FORM.html?aviso=Ha ocurrido un error imprevisto");
    }
}else{header("Location:../vistas/Modificar_FORM.html?aviso=Ha ocurrido un error imprevisto");}