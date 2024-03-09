<?php
include_once "../util/verificar_sessao.php";
require_once "VeiculoDAO.class.php";

$id = $_GET["id"];

$veiculoDAO = new VeiculoDAO();
$veiculo = $veiculoDAO->getById($id);

?>
<html>
<head>
</head>

<body>
	<h2>Editar dados do veiculo</h2>
	
	<form action="veiculo-editar-salvar.php"
		method="post">
	
		<input type="hidden"
			name="id"
			value="<?php echo $veiculo->getId(); ?>"
		/>
		<label for="nome">Nome:</label>
		<input
			id="nome-id"
			name="nome"
			type="text"
			value="<?php echo $veiculo->getNome(); ?>"/>
		<br/>
		
		<label for="marca">Marca:</label>
		<input
			id="marca-id"
			name="marca"
			type="text"
			value="<?php echo $veiculo->getMarca(); ?>"/>
		<br/>
		
		<label for="preco">Preco:</label>
		<input
			id="preco-id"
			name="preco"
			type="text"
			value="<?php echo $veiculo->getPreco(); ?>"/>
		<br/>
		<label for="modelo">Modelo:</label>
		<input
			id="modelo-id"
			name="modelo"
			type="text"
			value="<?php echo $veiculo->getModelo(); ?>"/>
		<br/>
		<input id="enviar-id"
			name="enviar"
			type="submit"
			value="Enviar"/>
		
	</form>

</body>

</html>


