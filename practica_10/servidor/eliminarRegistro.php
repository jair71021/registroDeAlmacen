<?php

$idHardware = $_POST['idHardware'];

include "conexion.php";
$conexion = conexion();

$sql = "DELETE FROM t_hardware WHERE id_hardware = '$idHardware'";

$respuesta = mysqli_query($conexion, $sql);

if ($respuesta) {
    header("location:../index.php");
} else {
    echo "No se pudo eliminar,";
}
?>