<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $miconexion = new mysqli("localhost", "root", "avaras08", "datospersonales");
        if ($miconexion->connect_errno) {
            echo "Failed to connect to MySQL: (" . $miconexion->connect_errno . ") " . $miconexion->connect_error;
        }
        echo $miconexion->host_info . "\n";

        /* Consultas de selección que devuelven un conjunto de resultados */
        if ($resultado = $miconexion->query("SELECT * FROM persona")) {
            printf("La selección devolvió %d filas.\n", $resultado->num_rows);

            /* liberar el conjunto de resultados */
            $resultado->close();
        }
        ?>
    </body>
</html>
