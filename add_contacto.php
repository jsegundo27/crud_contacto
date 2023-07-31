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
<div class="contacto__main">
<br>
<h2 class="text-center ">Crear</h2>
<div class="regresar__contenedor">
<a class="btn-regresar" href="index.php"><img class="contacto__iconos" src="assets/imagenes/previous.png" alt=""></a>
</div>
<div class="contacto__conteiner card ">
  <form  class="form m-4" action="crear_contacto.php" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el Nombre">
    </div>
    <div class="mb-3">
        <label class="form-label">Trabajo</label>
        <input type="text" class="form-control"   name="trabajo" placeholder="Ingrese el Trabajo">
    </div>
    <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="text" class="form-control"  name="telefono" placeholder="Ingrese el Telefono">
    </div>
    <div class="mb-3">
        <label class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" placeholder="Ingrese el Corrreo">
    </div>
    <div class="mb-3">
        <label  class="form-label">Dirección</label>
        <input type="text" class="form-control"  name="direccion" placeholder="Ingrese el Direcciones">
    </div>
    <div class="mb-3 ">
        <button class="btn btn-primary" type="submit">Agregar</button>
    </div>
  </form>    
 
   
        
</div>
</div>
</html>
   