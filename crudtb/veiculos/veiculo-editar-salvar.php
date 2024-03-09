<?php
include_once "../util/verificar_sessao.php";
require_once "VeiculoDAO.class.php";
require_once "veiculo.class.php";

$id = $_POST["id"];
$nome = trim($_POST["nome"]);
$marca = trim($_POST["marca"]);
$preco = trim($_POST["preco"]);
$modelo = trim($_POST["modelo"]);



$veiculo = new Veiculo();
$veiculo->setId($id);
$veiculo->setNome($nome);
$veiculo->setMarca($marca);
$veiculo->setPreco($preco);
$veiculo->setModelo($modelo);

$veiculoDao = new VeiculoDAO();

$veiculoDao->update($veiculo);

header("Location: /crudtb/veiculos/veiculos.php");
die();

?>