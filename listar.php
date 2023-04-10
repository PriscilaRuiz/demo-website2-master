<?php

// Conexión a la base de datos
include("conexion.php");
$mysqli_connect = conexion();

// Consulta a la base de datos
$consulta = "SELECT documento, nombre, apellido, direccion, celular FROM persona";
pg_query($con, $consulta);

header("location:listado.php");
?>