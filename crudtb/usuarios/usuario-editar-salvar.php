<?php
include_once "../util/verificar_sessao.php";
require_once "UsuarioDAO.class.php";
require_once "usuario.class.php";

$id = $_POST["id"];
$nome = trim($_POST["nome"]);
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

$senha = md5($senha);

$usuario = new Usuario();
$usuario->setId($id);
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);

$usuarioDao = new UsuarioDAO();

$usuarioDao->update($usuario);

header("Location: /crudtb/usuarios/usuarios.php");
die();

?>