<!DOCTYPE html>
<html lang="en">
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
 </head>
 <body >
  <div>
<nav class="bg-black">
    <!-- area de contenido -->
   <div class="container" >
    <center>
    <h1><font color="#40c4f">Contacto</font></h1>
    <?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];




$query =("INSERT INTO alumnos VALUES ('','$nombre','$apellido','$direccion')");
$resultado=$conexion->query($query);
 if ($resultado) {
   header("Location:consultaalumno.php");
}
else {
  echo "no se pudo guardar";
}

?>
<br>

    </center>
  </div>



     <style>
footer {
width: 100%;
text-align: center;
font-size: 20px;
font-weight: bold;
color: #ffffff;
padding: 30px;

}
</style>
<footer class="bg-black">
  <font>UTVT</font>
</footer>
   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
  </html>