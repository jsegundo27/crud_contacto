<?php
require 'conexion.php';
  $nombre=$_POST['nombre_contacto'];


  $cnn=conectar();
  $sql = "SELECT * FROM persona WHERE nombre='%".$nombre."%'";
  $reques= mysqli_query($cnn, $sql);
  $rest_contacto=mysqli_fetch_array($reques);
 
  header("Location: index.php?resultado=<?php echo $variable1 ?>"); 

?>