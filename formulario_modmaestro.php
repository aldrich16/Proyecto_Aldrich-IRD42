<?php
include ('conexion.php');
$matricula= $_POST ['txtmatricula'];
$nombre= $_POST ['txtnombre'];
$telefono= $_POST ['txttelefono'];
$materia= $_POST ['txtmateria'];

mysqli_query($conexion, "UPDATE `maestros` SET `nombre` = '$nombre', `telefono` = '$telefono', `materia` = '$materia' WHERE `matricula` = '$matricula'") or die("error de actualizar");
mysqli_close($conexion);
header("location:consultamaestro.php");
?>
