<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['idservicio'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $idservicio = $_GET['idservicio'];

    $sentencia = $bd->prepare("select * from servicios where idservicio = ?;");
    $sentencia->execute([$idservicio]);
    $servicios = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($servicios);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre Servicio: </label>
                        <input type="text" class="form-control" name="txtServicio" autofocus required
                        value="<?php echo $servicios->nomservicio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción: </label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus required
                        value="<?php echo $servicios->descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre Empleado: </label>
                        <input type="text" class="form-control" name="txtEmpleado" autofocus required 
                        value="<?php echo $servicios->nomempleado; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required 
                        value="<?php echo $servicios->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required 
                        value="<?php echo $servicios->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="text" class="form-control" name="txtPrecio" autofocus required 
                        value="<?php echo $servicios->precio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Iva: </label>
                        <input type="text" class="form-control" name="txtIva" autofocus required 
                        value="<?php echo $servicios->iva; ?>">
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="idservicio" value="<?php echo $servicios->idservicio; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>