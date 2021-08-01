<?php
    $idHardware= $_POST['idHardware'];             
    $nombres=$_POST['nombres'];
    $modelos=$_POST['modelos'];
    $numseries=$_POST['numseries'];
    $capacidades=$_POST['capacidades'];
    $descripcion=$_POST['descripcion'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_hardware
                SET     nombres='$nombres',
                        modelos='$modelos',
                        numseries='$numseries',
                        capacidades='$capacidades',
                        descripcion='$descripcion'
                
            WHERE id_hardware = '$idHardware'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }
?>