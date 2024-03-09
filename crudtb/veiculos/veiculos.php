<?php 

include_once "../util/verificar_sessao.php";
require_once "VeiculoDAO.class.php";

?>

<form
	action="veiculo-form.php"
	method="post">
	<button
		id="novo-veiculo-bt"
		type="submit">
		Novo
	</button>
</form>

<table
	border="1px"
	style="text-align:center;width:90%">
    <th>ID</th>
    <th>Nome</th>
	<th>Marca</th>
	<th>Preço</th>
	<th>Modelo</th>
	<th>Ações</th>


<?php

$veiculoDAO = new VeiculoDAO();
$veiculos = $veiculoDAO->listar();

foreach ( $veiculos as $veiculo )
{
    echo "<tr>";
    echo "<td>".$veiculo->getId()."</td>";
    echo "<td>".$veiculo->getNome()."</td>";
    echo "<td>".$veiculo->getMarca()."</td>";
	echo "<td>".$veiculo->getPreco()."</td>";
	echo "<td>".$veiculo->getModelo()."</td>";
    echo "<td>
          <a href='/crudtb/veiculos/veiculo-editar-form.php?id=".$veiculo->getId()."'>Editar</a>
          <a href='/crudtb/veiculos/veiculo-remover.php?id="
	       .$veiculo->getId()."'>Remover</a>
        </td>";
    echo "</tr>";
}

?>
</table>

