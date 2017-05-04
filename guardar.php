<?php

$miconn = new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
if ($miconn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sql = "INSERT INTO persona(nombre,apellido) VALUES ('$nombre','$apellido');";

/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = $miconn->query($sql)) {
    /* liberar el conjunto de resultados */
    $resultado->close();
}

