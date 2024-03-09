<?php

include_once "../util/verificar_sessao.php";
?>

<html>
<head>
</head>

<body>
	<h2>Novo Usuário</h2>
	
	<form action="usuario-salvar.php"
		method="POST">
	
		<label for="nome">Nome:</label>
		<input
			id="nome-id"
			name="nome"
			type="text"
			value=""/>
		<br/>
		
		<label for="nome">Login:</label>
		<input
			id="login-id"
			name="login"
			type="text"
			value=""/>
		<br/>
		
		<label for="senha">Senha:</label>
		<input
			id="senha-id"
			name="senha"
			type="password"
			value=""/>
		<br/>
		<input id="enviar-id"
			name="enviar"
			type="submit"
			value="Enviar"/>
		
	</form>

</body>

</html>