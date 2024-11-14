<?php
session_start();
require_once("Controlador_Finalizar_Compra");
require_once("../modelos/DAO_Cliente.php");
 $controlador_finalizar = new Controlador_Finalizar_Compra();
$cliente_DAO = new DAO_Cliente();
$cliente = $cliente_DAO->getClienteByNickname($_SESSION["user"]);
$id = $cliente->getId();

        $controlador_finalizar->finalizar_compra($id);