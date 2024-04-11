<?php

session_name("usuario");
session_start();

session_destroy();
header("Location: ../login.php");

?>