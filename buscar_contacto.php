<?php


if (!isset($_POST['nombre_contacto'])) {
    $_POST['nombre_contacto']='';
    $nombre=$_POST['nombre_contacto'];
}


$nombre=$_POST['nombre_contacto'];
$cnn=conectar();
$sql = "SELECT * FROM persona WHERE nombre like '%".$nombre."%'";
$sql_can = "SELECT  count(nombre) as 'total' FROM persona";

$reques_busqueda= mysqli_query($cnn, $sql);
$total= mysqli_query($cnn,$sql_can);
$total_res =mysqli_fetch_array($total);

?>