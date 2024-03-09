<?php
include_once "../util/verificar_sessao.php";
require_once "../util/mysqlbd.php";
require_once "VeiculoDAO.class.php";
require_once "veiculo.class.php";

$nome = trim($_POST["nome"]);
$marca = trim($_POST["marca"]);
$preco = trim($_POST["preco"]);
$modelo = trim($_POST["modelo"]);


$veiculo = new Veiculo();
$veiculo->setNome($nome);
$veiculo->setMarca($marca);
$veiculo->setPreco($preco);
$veiculo->setModelo($modelo);

$veiculoDao = new VeiculoDAO();

$retorno = $veiculoDao->salvar($veiculo);
if ( $retorno )
{
    // OK, salvou no bd, redirecionar usuario
    header("Location: /crudtb/veiculos/veiculos.php");
    die();
}
else {
    echo "Erro ao salvar dados no BD";
}


?>