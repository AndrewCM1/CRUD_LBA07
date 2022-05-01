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

$sql="INSERT INTO biblioteca VALUES('$cod_libro','$afecha','$autor','$titulo','$url_ubicacion','$especialidad','$editorial')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>