<?php

include("conexion.php");
$con=conectar();

$cod_libro=$_POST['cod_libro'];
$afecha=$_POST['afecha'];
$autor=$_POST['autor'];
$titulo=$_POST['titulo'];
$url_ubicacion=$_POST['url_ubicacion'];
$especialidad=$_POST['especialidad'];
$editorial=$_POST['editorial'];

$sql="UPDATE biblioteca SET  afecha='$afecha',autor='$autor',titulo='$titulo',url_ubicacion='$url_ubicacion',especialidad='$especialidad',editorial='$editorial'  WHERE cod_libro='$cod_libro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>