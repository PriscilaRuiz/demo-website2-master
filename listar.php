<?php

// Conexión a la base de datos
include("conexion.php");
$con = conexion();

// Consulta a la base de datos
$consulta = "SELECT documento, nombre, apellido, direccion, celular FROM persona";
$resultados = pg_query($con, $consulta);

// Verificar si se obtuvieron resultados
if (pg_num_rows($resultados) > 0) {
    // Mostrar los registros en una tabla
    echo '<table>';
    echo '<tr>';
    echo '<th>Documento</th>';
    echo '<th>Nombre</th>';
    echo '<th>Apellido</th>';
    echo '<th>Direccion</th>';
    echo '<th>Celular</th>';
    // Agregar más columnas según los campos en la base de datos
    echo '</tr>';

    while ($fila = pg_fetch_assoc($resultados)) {
        echo '<tr>';
        echo '<td>' . $fila['documento'] . '</td>';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td>' . $fila['apellido'] . '</td>';
        echo '<td>' . $fila['direccion'] . '</td>';
        echo '<td>' . $fila['celular'] . '</td>';
    }

    echo '</table>';
} else {
    echo 'No se encontraron registros.';
}
header("location:listado.php");

?>