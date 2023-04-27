<?php
include("conexion.php");
$con=conectar();

$cod_peli=$_POST['ID'];
$dni=$_POST['calificacion'];
$nombres=$_POST['nombre'];
$ape=$_POST['descri'];


$sql="INSERT INTO pelicula VALUES('$cod_peli','$dni','$nombres','$ape')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>