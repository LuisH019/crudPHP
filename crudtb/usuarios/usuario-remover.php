<?php
include_once "../util/verificar_sessao.php";
require_once "UsuarioDAO.class.php";

$id = $_GET["id"];

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->remover($id);

header("Location: /crudtb/usuarios/usuarios.php");
die();


?>