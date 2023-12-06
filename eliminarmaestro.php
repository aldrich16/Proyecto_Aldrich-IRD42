<?php

  include("conexion.php");
  $matricula= $_REQUEST['matricula'];
  $query="DELETE FROM maestros
  WHERE matricula='$matricula'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultamaestro.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>