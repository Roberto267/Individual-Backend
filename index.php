<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pelicula";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>
    <style > 
    body{
        background-color: #F48FB1 ;
    }
</style>
    <script type="text/javascript">
    function eliminar(){
        var respuesta = confirm("¿Estas seguro de que deseas eliminarlo?");
    if(respuesta==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
 </script>
  <script type="text/javascript">
    function edit(){
    var respuesta = confirm("¿Estas seguro de que deseas editarlo?");
    if(respuesta==true)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}
</script>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese los datos sobre la Pelicula</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="calificacion" placeholder="calificacion">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de la pelicula">
                                    <input type="text" class="form-control mb-3" name="descri" placeholder="Opinion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Calificacion de la pelicula</th>
                                        <th>Nombre de la pelicula</th>
                                        <th>Opinion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID']?></th>
                                                <th><?php  echo $row['calificacion']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['descri']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>"> <button type='button' class="btn btn-info" onclick="return edit()">Editar</button></a></th>
                                                <th><a href="delete.php?id= <?php  echo $row['ID'] ?>"> <button type='button' class="btn btn-danger" onclick=" return eliminar()">Eliminar </button></a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                         
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    
            </div>
            
       </body>    
</html>