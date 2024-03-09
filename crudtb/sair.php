<?php

session_start();

session_destroy();

header("Location: /crudtb/login_form.php");
die();


?>