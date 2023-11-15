<?php
    print_r($_POST);
    if(!isset($_POST['idservicio'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $idservicio = $_POST['idservicio'];
    $nomservicio = $_POST['txtServicio'];
    $descripcion = $_POST['txtDescripcion'];
    $nomempleado = $_POST['txtEmpleado'];
    $direccion = $_POST['txtDireccion'];
    $telefono = $_POST['txtTelefono'];
    $precio = $_POST['txtPrecio'];
    $iva = $_POST['txtIva'];

    $sentencia = $bd->prepare("UPDATE servicios SET nomservicio = ?, descripcion = ?, nomempleado = ?, direccion = ?, telefono = ?, precio = ?, iva = ? where idservicio = ?;");
    $resultado = $sentencia->execute([$nomservicio, $descripcion, $nomempleado, $direccion, $telefono, $precio, $iva, $idservicio]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>