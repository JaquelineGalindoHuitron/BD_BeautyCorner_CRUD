<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtServicio"]) || empty($_POST["txtDescripcion"]) || empty($_POST["txtEmpleado"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtIva"]) ){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nomservicio = $_POST["txtServicio"];
    $descripcion = $_POST["txtDescripcion"];
    $nomempleado = $_POST["txtEmpleado"];
    $direccion = $_POST["txtDireccion"];
    $telefono = $_POST["txtTelefono"];
    $precio = $_POST["txtPrecio"];
    $iva = $_POST["txtIva"];
    
    $sentencia = $bd->prepare("INSERT INTO servicios(nomservicio,descripcion,nomempleado,direccion,telefono,precio,iva) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$nomservicio,$descripcion,$nomempleado,$direccion,$telefono,$precio,$iva]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>