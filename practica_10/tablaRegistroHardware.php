<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT  id_hardware, 
                    nombres,
                    modelos,
                    numseries,
                    capacidades,
                    descripcion,miimagen,
                    extension
            FROM t_hardware";
            
    $respuesta = mysqli_query($conexion,$sql);
?>
    <div class="container" >
        <div class="row">
            <div class="col-sm-12">
                <table id="tablaObjetivo" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre </th>
                            <th>Modelos</th>
                            <th>Numero de serie</th>
                            <th>Capacidad</th>
                            <th>Descripcion</th>
                            <th>Imagen de Hardware</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    while($mostrar= mysqli_fetch_array ($respuesta)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar['id_hardware'];  ?> </td>
                            <td><?php echo $mostrar['nombres'];  ?> </td>
                            <td><?php echo $mostrar['modelos'];       ?></td>
                            <td><?php echo $mostrar['numseries'];     ?></td>
                            <td><?php echo $mostrar['capacidades'];     ?></td>
                            <td><?php echo $mostrar['descripcion']; ?></td>
                            <td><?php 
                                    $ext = $mostrar['extension'];
                                    $imagen = '';
                                    
                                    if ($ext == "jpg" || $ext == "JPG") {
                                        $cadenaImagen = '<img src=' . 'archivos/' . $mostrar['miimagen'] . ' width="50px" height="50px">';
                                        echo '<a href="verimg.php?nombre=' . $mostrar['miimagen'] . '" target="_blank"> ' . $cadenaImagen . ' </a>';
                                    }
                                    ?>
                                </td>
                            <td>
                                <form action="actualizar.php" method="POST">
                                    <input type="text" hidden name="idHardware" value="<?php echo $mostrar['id_hardware']?>">
                                    <button class="btn btn-warning">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="servidor/eliminarRegistro.php" method="POST">
                                    <input type="text" hidden name="idHardware" value="<?php echo $mostrar['id_hardware']?>">
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Modelos</th>
                        <th>Numero de serie</th>
                        <th>Capacidad </th>
                        <th>Descripcion</th>
                        <th>Imagen de Hardware</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </tr>
                    </tfoot>
                </table>            
            
            
            </div>
        </div>
    </div>

