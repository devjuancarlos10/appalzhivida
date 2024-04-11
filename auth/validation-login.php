<?php

session_name("usuario");
session_start();

if((isset($_SESSION["email"])) && ($_SESSION["email"] != "")){
    header("Location: ./secciones/");
}


?>