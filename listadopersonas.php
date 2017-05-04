<?php
$miconexion = new mysqli("10.20.22.214", "root", "avaras08", "datospersonales");
if ($miconexion->connect_errno) {
    echo "Failed to connect to MySQL: (" . $miconexion->connect_errno . ") " . $miconexion->connect_error;
}

$sql = "SELECT * FROM persona";

$resultado = $miconexion->query($sql);

echo $resultado->num_rows;
?>
<form action="consulta.php" method="post">
    <?php
    while ($fila = $resultado->fetch_assoc()) {
        $idpersona = $fila["idpersona"];
        echo "<input type=radio name='idpersona' value=$idpersona>";
        echo $idpersona."/".$fila["nombre"]."\n";
        echo '<br>';
    }
    ?>
    <input type="submit" value="Consultar">
</form>