<?php 
    require 'conexion.php';


    function consultarPersona(){
        $cnn=conectar();
        $sql="select * from persona";
        $result = mysqli_query($cnn, $sql);
        return $result;
    }

    function consultarTotal(){
        $cnn=conectar();
        $cantidad=0;
        $sql="select * from persona";
        $total= mysqli_query($cnn, $sql);
        while($res =mysqli_fetch_array($total)){
            $cantidad=$cantidad+1;
        }
        return $cantidad;
    }
   
    function consultarEditar($id){
        $cnn=conectar();

        $sql="select * from persona where id=".$id;
        $persona_editar= mysqli_query($cnn, $sql);
        $consulta_editar=mysqli_fetch_array($persona_editar);
    
        return $consulta_editar;
    }


   ?>
