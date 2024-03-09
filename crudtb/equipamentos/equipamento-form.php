<?php

include_once "../util/verificar_sessao.php";
?>

<html>
<head>
</head>

<body>
	<h2>Novo Equipamento</h2>
	
	<form action="equipamento-salvar.php"
		method="post">
	
		<label for="nome">Nome:</label>
		<input
			id="nome-id"
			name="nome"
			type="text"
			value=""/>
		<br/>
		
		<label for="marca">Marca:</label>
		<input
			id="marca-id"
			name="marca"
			type="text"
			value=""/>
		<br/>
		
		<label for="preco">Preço:</label>
		<input
			id="preco-id"
			name="preco"
			type="text"
			value=""/>
		<br/>
		<input id="enviar-id"
			name="enviar"
			type="submit"
			value="Enviar"/>
		
	</form>

</body>

</html>