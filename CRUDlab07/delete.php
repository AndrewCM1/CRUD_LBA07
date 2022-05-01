<?php

include("conexion.php");
$con=conectar();

$cod_libro=$_GET['id'];

$sql="DELETE FROM biblioteca  WHERE cod_libro='$cod_libro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
