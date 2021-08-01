

<?php include "header.php" ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>

    
    <!-- Page Content -->
    <div class="container" >
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Registros De Hardware</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/agregarRegistro.php" enctype="multipart/form-data" method="POST"  >
                        <div class="row">
                            <div class="col">
                                <label for="nombres">Nombres</label>
                                <input type="text"name="nombres" class="form-control" required >
                            </div>
                            <div class="col">
                                <label for="modelos">Modelos</label>
                                <input type="text" name="modelos" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="numseries"> Numero de serie </label>
                                <input type="text" name="numseries" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="capacidades"> Capacidad</label>
                                <input type="text" name="capacidades" class="form-control" >
                            </div>
                        </div>
                        
                        <div class="row">
                                <div class="col">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                                <div class="col">
                                    <label for="miimagen">Imagen de Hardware </label>
                                    <input type="file" name="miimagen" class="form-control" required>
                                </div>
                        </div>
                            <br>
                            <button class=" btn btn-outline-success btn-lg btn-block">Guardar</button>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de registro de almacen</h3>
                        <?php include "tablaRegistroHardware.php";?>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>


<?php include "footer.php"; ?>

