<?php

require_once "usuarios/UsuarioDAO.class.php";

$login = trim($_POST["username"]);
$senha = md5(trim($_POST["password"]));

$usuarioDAO = new UsuarioDAO();

$usuario = $usuarioDAO->findByLogin($login);

if ( $usuario && $senha == $usuario->getSenha() )
{
    session_start();
    $_SESSION["login"] = $usuario->getLogin();
    header("Location: /crudtb/dashboard.php");
    die();   
}
else {
    header("Location: /crudtb/login_form.php");
    die();
}





?>