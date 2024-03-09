<?php
include_once "../util/verificar_sessao.php";
require_once "../util/mysqlbd.php";
require_once "EquipamentoDAO.class.php";
require_once "equipamento.class.php";

$nome = trim($_POST["nome"]);
$marca = trim($_POST["marca"]);
$preco = trim($_POST["preco"]);


$equipamento = new Equipamento();
$equipamento->setNome($nome);
$equipamento->setMarca($marca);
$equipamento->setPreco($preco);

$equipamentoDao = new EquipamentoDAO();

$retorno = $equipamentoDao->salvar($equipamento);
if ( $retorno )
{
    // OK, salvou no bd, redirecionar usuario
    header("Location: /crudtb/equipamentos/equipamentos.php");
    die();
}
else {
    echo "Erro ao salvar dados no BD";
}


?>