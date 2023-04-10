<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
</head>
<body>
    <div>
        <h1 class="mt-5">Listado de Usuarios</h1>
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
            <tbody>
                <?php
                    // Conexión a la base de datos
                    include("conexion.php");
                    $con = conexion();

                    // Consulta a la base de datos
                    $consulta = "SELECT documento, nombre, apellido, direccion, celular FROM persona";
                    $resultados = pg_query($con, $consulta);

                    // Verificar si se obtuvieron resultados
                    if (pg_num_rows($resultados) > 0) {

                        while ($fila = pg_fetch_assoc($resultados)) {
                            echo '<tr>';
                            echo '<td>' . $fila['documento'] . '</td>';
                            echo '<td>' . $fila['nombre'] . '</td>';
                            echo '<td>' . $fila['apellido'] . '</td>';
                            echo '<td>' . $fila['direccion'] . '</td>';
                            echo '<td>' . $fila['celular'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">No se encontraron registros.</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
