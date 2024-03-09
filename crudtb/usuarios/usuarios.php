<?php 

include_once "../util/verificar_sessao.php";
require_once "UsuarioDAO.class.php";

?>

<form
	action="usuario-form.php"
	method="post">
	<button
		id="novo-usuario-bt"
		type="submit">
		Novo
	</button>
</form>

<table
	border="1px"
	style="text-align:center;width:90%">
    <th>ID</th>
    <th>Nome</th>
	<th>Login</th>
	<th>Ações</th>


<?php

$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->listar();

foreach ( $usuarios as $usr )
{
    echo "<tr>";
    echo "<td>".$usr->getId()."</td>";
    echo "<td>".$usr->getNome()."</td>";
    echo "<td>".$usr->getLogin()."</td>";
    echo "<td>
          <a href='/crudtb/usuarios/usuario-editar-form.php?id=".$usr->getId()."'>Editar</a>
          <a href='/crudtb/usuarios/usuario-remover.php?id="
	       .$usr->getId()."'>Remover</a>
        </td>";
    echo "</tr>";
}

?>
</table>

