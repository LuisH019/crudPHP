<?php
include_once "../util/verificar_sessao.php";
require_once "../util/mysqlbd.php";
require_once "UsuarioDAO.class.php";
require_once "usuario.class.php";

$nome = trim($_POST["nome"]);
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

$senha = md5($senha);

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);

$usuarioDao = new UsuarioDAO();

$retorno = $usuarioDao->salvar($usuario);
if ( $retorno )
{
    // OK, salvou no bd, redirecionar usuario
    header("Location: /crudtb/usuarios/usuarios.php");
    die();
}
else {
    echo "Erro ao salvar dados no BD";
}


?>