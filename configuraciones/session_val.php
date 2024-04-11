<?php
session_name("usuario");
session_start();

require("bd.php");

if($_POST){
    $conexion = new conexion();
    $email = $_POST["usuario"];
    $pass = $_POST["contrasena"];

    $get_dates = $conexion->consultar("SELECT * FROM usuario WHERE correo = '$email'");

    $password = $get_dates[0]["contraseña"];

    if($pass == $password){
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $pass;
        header("Location: ../secciones/");
    }else{
        header("Location: ../login.php");
    }

}

?>