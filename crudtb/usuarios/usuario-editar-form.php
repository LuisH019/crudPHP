<?php
include_once "../util/verificar_sessao.php";
require_once "UsuarioDAO.class.php";

$id = $_GET["id"];

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->getById($id);

?>
<html>
<head>
</head>

<body>
	<h2>Editar dados do usuário</h2>
	
	<form action="usuario-editar-salvar.php"
		method="post">
	
		<input type="hidden"
			name="id"
			value="<?php echo $usuario->getId(); ?>"
		/>
		<label for="nome">Nome:</label>
		<input
			id="nome-id"
			name="nome"
			type="text"
			value="<?php echo $usuario->getNome(); ?>"/>
		<br/>
		
		<label for="nome">Login:</label>
		<input
			id="login-id"
			name="login"
			type="text"
			value="<?php echo $usuario->getLogin(); ?>"/>
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


