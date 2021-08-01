<?php
    $idHardware= $_POST['idHardware'];

    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT  id_hardware, 
                    nombres,
                    modelos,
                    numseries,
                    capacidades,
                    descripcion,miimagen,
                    extension
                FROM t_hardware
            WHERE id_hardware= '$idHardware'";
            
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);

?>
<?php include "header.php"; ?>
    <div class="container" >
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Actualizar Registros De Hardware</h1>
                    <p class="lead">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="servidor/actualizarRegistro.php" method="POST" >
                                <input type="text" hidden name="idHardware" value="<?php echo $datos['id_hardware']?>">
                            <div class="row">
                                <div class="col">
                                    <label for="nombres">Nombres</label>
                                    <input type="text"name="nombres" class="form-control" required value="<?php echo $datos['nombres'] ?>">
                                </div>
                                <div class="col">
                                    <label for="modelos">Modelos</label>
                                    <input type="text" name="modelos" class="form-control" required value="<?php echo $datos['modelos'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="numseries"> Numero de serie </label>
                                    <input type="text" name="numseries" class="form-control" required value="<?php echo $datos['numseries'] ?>">
                                </div>
                                <div class="col">
                                    <label for="capacidades"> Capacidad</label>
                                    <input type="text" name="capacidades" class="form-control" value="<?php echo $datos['capacidades'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" cols="30" rows="2" class="form-control" value="<?php echo $datos['descripcion'] ?>"></textarea>
                                </div>
                            </div>
                                <br>
                                <button class=" btn btn-outline-primary btn-lg btn-block">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>


<?php include "footer.php"; ?>

