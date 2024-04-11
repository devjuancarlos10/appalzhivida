<?php

session_name("usuario");
session_start();

include("./bd.php");
$conexion = new conexion();
if($_GET){
    $id = $_GET["id"];
    $conexion->ejecutar("DELETE FROM pacientes WHERE idPacientes = '$id'");
    header(("Location: ../secciones/vista_pacientes.php"));
}

?>