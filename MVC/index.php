<?php
// index.php
require_once 'Controllers/VeiculoController.php';
// Os includes dos Models/Database são feitos dentro do Controller

$controller = new VeiculoController();
$controller->processarRequisicao();