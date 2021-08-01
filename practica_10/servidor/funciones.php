
<?php

include "conexion.php";


function agregarRegistro($nombres,
                        $modelos,
                        $numseries,
                        $capacidades,
                        $descripcion,
                        $miimagen,
                        $extension){

  $conexion=conexion();
    $sql ="INSERT INTO t_hardware (nombres,modelos,
                                    numseries,capacidades,
                                    descripcion,miimagen,
                                    extension) 
                                            VALUES ('$nombres',
                                                    '$modelos',
                                                    '$numseries',
                                                    '$capacidades',
                                                    '$descripcion',
                                                    '$miimagen',
                                                    '$extension') ";
    $respuesta = mysqli_query($conexion, $sql);
  return $respuesta;
  }
    
?>    