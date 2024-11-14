<?php
session_start();


        unset ($_SESSION["carrito"]);
        header("../vistas/index.php");
 