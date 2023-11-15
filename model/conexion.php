<?php 
$contrasena = "";
$usuario = "root";
$bd_beautycorner = "bd_beautycorner";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$bd_beautycorner,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
