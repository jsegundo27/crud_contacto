<?php
require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$trabajo = $_POST['trabajo'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$cnn=conectar();
$sql ="UPDATE persona SET nombre = '".$nombre."', trabajo = '".$trabajo."', telefono = '".$telefono."', correo = '".$correo."' ,direccion= '".$direccion."' where id='".$id."'";


if ($reques= mysqli_query($cnn, $sql)) {
   header("Location: index.php");
   die();
   
}else{
   echo 'no se registro';
}

