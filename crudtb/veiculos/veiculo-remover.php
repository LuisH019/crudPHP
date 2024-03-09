<?php
include_once "../util/verificar_sessao.php";
require_once "VeiculoDAO.class.php";

$id = $_GET["id"];

$veiculoDAO = new VeiculoDAO();
$veiculoDAO->remover($id);

header("Location: /crudtb/veiculos/veiculos.php");
die();


?>