<?php 
    if(!isset($_GET['idservicio'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $idservicio = $_GET['idservicio'];

    $sentencia = $bd->prepare("DELETE FROM servicios where idservicio = ?;");
    $resultado = $sentencia->execute([$idservicio]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>
