<?php
require 'conexion.php';


$nombre = $_POST['nombre'];
$trabajo = $_POST['trabajo'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$cnn=conectar();
$sql = "INSERT INTO persona (nombre, trabajo,telefono,correo,direccion) VALUES ('".$nombre."', '".$trabajo."','".$telefono."','".$correo."','".$direccion."')";
$reques= mysqli_query($cnn, $sql);

if ($reques) {
   header("Location: index.php");
   die();
   
}else{
   echo 'no se registro';
}





?>