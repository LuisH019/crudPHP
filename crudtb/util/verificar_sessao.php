<?php


session_start();

if ( $_SESSION["login"] == "" )
{
    header("Location: /crudtb/login_form.php");
    die();
}

?>