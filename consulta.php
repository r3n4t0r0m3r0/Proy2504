<?php
$idpersona = $_POST["idpersona"];
$miconexion = new mysqli("10.20.22.214", "root", "avaras08", "datospersonales");
if ($miconexion->connect_errno) {
    echo "Failed to connect to MySQL: (" . $miconexion->connect_errno . ") " . $miconexion->connect_error;
}

$sql = "SELECT * FROM persona WHERE idpersona = $idpersona";

$resultado = $miconexion->query($sql);

echo $resultado->num_rows;
?>

    <?php
    while ($fila = $resultado->fetch_assoc()) {
        echo $fila["nombre"]."\n";
        echo "<br>\n";
        echo $fila["apellido"]."\n";
    }
    ?>