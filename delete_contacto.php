<?php
require 'conexion.php';

$id=$_GET['id'];
$cnn=conectar();
$sql = "DELETE FROM persona WHERE id=".$id;
$reques= mysqli_query($cnn, $sql);
header("Location: index.php");
die();
