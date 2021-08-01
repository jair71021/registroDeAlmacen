<?php
    session_start();

    include "funciones.php";
    $nombres=$_POST['nombres'];
    $modelos=$_POST['modelos'];
    $numseries=$_POST['numseries'];
    $capacidades=$_POST['capacidades'];
    $descripcion=$_POST['descripcion'];
    $miimagen=$_FILES['miimagen']['name'];
    $extension = explode(".", $miimagen);
    $extension = $extension[1];
    $rutaTemporal = $_FILES['miimagen']['tmp_name'];
    $rutaDeServidor = "../archivos/";

    if (move_uploaded_file($rutaTemporal, $rutaDeServidor . $miimagen)) {
        $insertarEnBD = agregarRegistro($nombres,
                                            $modelos,
                                            $numseries,
                                            $capacidades,
                                            $descripcion,
                                        $miimagen,$extension);
        if ($insertarEnBD) {
            $_SESSION['operacion'] = "insert";
        } else {
            $_SESSION['operacion'] = "error";
        }
    } else {
        $_SESSION['operacion'] = "error";
    }

    header("location:../index.php");

?>
    
