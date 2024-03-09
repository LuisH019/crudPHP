<?php

$server = "127.0.0.1";
$database = "db_ifpr";
$user = "root";
$pass = "";

$conn = new PDO(
    "mysql:host=$server;dbname=$database",
    $user, $pass);


?>