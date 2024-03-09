<?php
include_once "../util/verificar_sessao.php";
require_once "EquipamentoDAO.class.php";
require_once "equipamento.class.php";

$id = $_POST["id"];
$nome = trim($_POST["nome"]);
$marca = trim($_POST["marca"]);
$preco = trim($_POST["preco"]);


$equipamento = new Equipamento();
$equipamento->setId($id);
$equipamento->setNome($nome);
$equipamento->setMarca($marca);
$equipamento->setPreco($preco);

$equipamentoDao = new EquipamentoDAO();

$equipamentoDao->update($equipamento);

header("Location: /crudtb/equipamentos/equipamentos.php");
die();

?>