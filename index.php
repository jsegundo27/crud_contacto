<?php 
    require 'controller_contacto.php';
     require 'buscar_contacto.php';
  
   

  
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto contacto</title>
    <link rel="stylesheet" href="assets/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/estilos/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">


</head>


<body>

   <div class="contacto__header">
    <h3>Teléfono</h3>
  <?php 
    echo  $total_res['total'];  
   ?>
   <br>
 
   <div class="contacto__conteiner card ">
    
    <table class="table contacto__table ">
       <div class="contacto__botones">
            <form action="index.php" method="POST">
                <input type="text" class="form-control" name="nombre_contacto" style="margin-right:10px" >
                <button  class="icono_delete btn"  href="" type="submit"> <img class="contacto__iconos" src="assets/imagenes/search.png" alt=""></button>
            </form>
            <a class="icono__add btn" style="margin-left:10px"  href="add_contacto.php" > <img class="contacto__iconos" src="assets/imagenes/plus.png" alt=""></a>
      </div>

        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre de Contacto</th>
            <th></th>
            </tr>
        </thead>
        <tbody>

        <?php 
        $total=0;
         while($row =mysqli_fetch_array($reques_busqueda)){

           
            ?>
        
            <tr>
                <td scope="row"> <?php echo $row['id']; ?>  </td>
                <td class="contacto__columna"><?php echo $row['nombre']; ?> 
                 <p class="contacto__ocultar-columna"><?php echo $row['telefono'] ?></p>
               </td>
               <td><a href="<?= 'editar_contacto.php?id='.$row["id"]?>"><img class="contacto__iconos" src="assets/imagenes/pen.png" alt=""></a>
               <a href="<?= 'delete_contacto.php?id='.$row["id"]?>"><img class="contacto__iconos" src="assets/imagenes/remove.png" alt=""></a></td>
              
            </tr>
           
        <?php } 
          
        ?>
    
        
        </tbody>
        </table>
 
        

   </div>
        
   </div>
  
    
   
    <script src="assets/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>