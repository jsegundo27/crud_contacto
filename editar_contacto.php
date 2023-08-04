<?php 
    require 'controller_contacto.php';
           
    $id=$_GET['id'];
    $consulta_editar=consultarEditar($id);
     
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/estilos/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
<br>
<h2 class="text-center ">editar</h2>
<div class="regresar__contenedor">
<a class="btn-regresar" href="index.php"><img class="contacto__iconos" src="assets/imagenes/previous.png" alt=""></a>

</div>
<div class="contacto__conteiner card ">
   
  <form  class="form m-4" action="update_contacto.php" method="POST">
    <div class="mb-3">
        <input type="hidden" class="form-control" id="nombre" name="id"  placeholder="Ingrese el Nombre" value="<?php echo $consulta_editar['id']?> ">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese el Nombre" value="<?php echo $consulta_editar['nombre']?> ">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Trabajo</label>
        <input type="text" class="form-control" id="nombre" name="trabajo"  placeholder="Ingrese el Trabajo" value="<?php echo $consulta_editar['trabajo']?> " >
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="nombre" name="telefono" placeholder="Ingrese el Telefono" value="<?php echo $consulta_editar['telefono']?>" >
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Correo</label>
        <input type="text" class="form-control" id="nombre" name="correo"  placeholder="Ingrese el Corrreo" value="<?php echo $consulta_editar['correo']?>" >
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="nombre" name="direccion"  placeholder="Ingrese el Direcciones" value="<?php echo $consulta_editar['direccion']?>" >
    </div>
    <div class="mb-3 ">
        <button class="btn btn-primary" type="submit">Agregar</button>
    </div>
  </form>    
 
   
        
</div>

</html>
   