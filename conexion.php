<?php
function conectar(){
    $host="localhost";
    $user="id20173707_root";
    $pass="p](N*6fNZ7bXbbP6";

    $bd="id20173707_hotel";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
