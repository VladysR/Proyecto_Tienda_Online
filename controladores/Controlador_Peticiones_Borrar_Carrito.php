<?php
session_start();


        unset ($_SESSION["carrito"]);
        $_SESSION["carrito"] = [];
        header("Location:../vistas/carrito.php");
 