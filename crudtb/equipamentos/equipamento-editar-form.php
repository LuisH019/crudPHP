<?php
include_once "../util/verificar_sessao.php";
require_once "EquipamentoDAO.class.php";

$id = $_GET["id"];

$equipamentoDAO = new EquipamentoDAO();
$equipamento = $equipamentoDAO->getById($id);

?>
<html>
<head>
</head>

<body>
	<h2>Editar dados do equipamento</h2>
	
	<form action="equipamento-editar-salvar.php"
		method="post">
	
		<input type="hidden"
			name="id"
			value="<?php echo $equipamento->getId(); ?>"
		/>
		<label for="nome">Nome:</label>
		<input
			id="nome-id"
			name="nome"
			type="text"
			value="<?php echo $equipamento->getNome(); ?>"/>
		<br/>
		
		<label for="marca">Marca:</label>
		<input
			id="marca-id"
			name="marca"
			type="text"
			value="<?php echo $equipamento->getMarca(); ?>"/>
		<br/>
		
		<label for="preco">Preco:</label>
		<input
			id="preco-id"
			name="preco"
			type="text"
			value="<?php echo $equipamento->getPreco(); ?>"/>
		<br/>
		<input id="enviar-id"
			name="enviar"
			type="submit"
			value="Enviar"/>
		
	</form>

</body>

</html>


