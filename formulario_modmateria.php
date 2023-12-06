<?php
include ('conexion.php');
$matricula= $_POST ['txtmatricula'];
$nombre= $_POST ['txtnombre'];

mysqli_query($conexion, "UPDATE `materias` SET `nombre` = '$nombre' WHERE `matricula` = '$matricula'") or die("error de actualizar");
mysqli_close($conexion);
header("location:consultamateria.php");
?>
