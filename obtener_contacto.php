<?php 
    require 'conexion.php';
        $id=$_GET['id'];
        $cnn=conectar();

        $sql="select * from persona where id=".$id;
        $persona_editar= mysqli_query($cnn, $sql);
        $consulta_editar=mysqli_fetch_array($persona_editar);

   



