<?php

  include("conexion.php");
  $matricula= $_REQUEST['matricula'];
  $query="DELETE FROM materias
  WHERE matricula='$matricula'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultamateria.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>