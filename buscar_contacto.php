<?php

 require 'conexion.php';


  $nombre="edwin";
  $cnn=conectar();
  $sql = "SELECT * FROM persona WHERE nombre like '%".$nombre."%'";
  $reques= mysqli_query($cnn, $sql);
  $rest=mysqli_fetch_array($reques);
 var_dump($rest);
  
 



?>