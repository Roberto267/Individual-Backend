<!DOCTYPE html>
<html lang="en">
    <head></head>
    <style > 
    body{
        background-color: #AF7AC5  ;
        
    }
 
    form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

input[type="submit"] {
  padding: 20px 30px;
  font-size: 12px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;

}
input[type="submit"]:hover {
    background-color:#2471A3 ;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
}
h2 {
  text-align: center;
  font-size: 4rem;
  background-image: linear-gradient(to right, #00d2ff, #3a7bd5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

</style>
<body>
<div class="container">
  <h2>Presiona el boton para enviar los datos</h2>
</div>
</body>
    <body>
<?php

include("conexion.php");

$con=conectar();

$cod_peli=$_POST['ID'];
$dni=$_POST['calificacion'];
$nombres=$_POST['nombre'];
$ape=$_POST['descri'];

$sql="UPDATE pelicula SET  calificacion='$dni',nombre='$nombres',descri='$ape' WHERE ID='$cod_peli'";
$query=mysqli_query($con,$sql);

    if($query){
        ?>
        <form action="index.php" method="POST" class="boton">
        <input type="submit" class="btn btn-primary">
    </form> 
    </body>
    <?php   
}
?>