<?php
include_once "../util/verificar_sessao.php";
require_once "EquipamentoDAO.class.php";

$id = $_GET["id"];

$equipamentoDAO = new EquipamentoDAO();
$equipamentoDAO->remover($id);

header("Location: /crudtb/equipamentos/equipamentos.php");
die();


?>