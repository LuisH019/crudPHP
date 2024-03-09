<?php

include_once "util/verificar_sessao.php";


echo "Bem-vindo ".$_SESSION["login"];



?>

<fieldset title="Gerenciamento">
    <a href="/crudtb/usuarios/usuarios.php">
    Usuários
    </a>
    <br/>
    <a href="/crudtb/equipamentos/equipamentos.php">
    Equipamentos
    </a>
    <a href="/crudtb/veiculos/veiculos.php">
    Veiculos
    </a>
</fieldset>

<form action="sair.php" method="post">
	<input type="submit" value="SAIR" />
</form>


