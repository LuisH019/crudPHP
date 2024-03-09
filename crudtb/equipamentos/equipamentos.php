<?php 

include_once "../util/verificar_sessao.php";
require_once "EquipamentoDAO.class.php";

?>

<form
	action="equipamento-form.php"
	method="post">
	<button
		id="novo-equipamento-bt"
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
	<th>Ações</th>


<?php

$equipamentoDAO = new EquipamentoDAO();
$equipamentos = $equipamentoDAO->listar();

foreach ( $equipamentos as $equipamento )
{
    echo "<tr>";
    echo "<td>".$equipamento->getId()."</td>";
    echo "<td>".$equipamento->getNome()."</td>";
    echo "<td>".$equipamento->getMarca()."</td>";
	echo "<td>".$equipamento->getPreco()."</td>";
    echo "<td>
          <a href='/crudtb/equipamentos/equipamento-editar-form.php?id=".$equipamento->getId()."'>Editar</a>
          <a href='/crudtb/equipamentos/equipamento-remover.php?id="
	       .$equipamento->getId()."'>Remover</a>
        </td>";
    echo "</tr>";
}

?>
</table>

