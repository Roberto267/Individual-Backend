<?php

include("conexion.php");
$con=conectar();

$cod_peli=$_GET['id'];

$sql="DELETE FROM pelicula  WHERE ID='$cod_peli'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
