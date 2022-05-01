<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM biblioteca WHERE cod_libro='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_libro" value="<?php echo $row['cod_libro']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="afecha" placeholder="Afecha" value="<?php echo $row['afecha']  ?>">
                                <input type="text" class="form-control mb-3" name="autor" placeholder="Autor" value="<?php echo $row['autor']  ?>">
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" value="<?php echo $row['titulo']  ?>">
                                <input type="text" class="form-control mb-3" name="url_ubicacion" placeholder="Url_ubicacion" value="<?php echo $row['url_ubicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad']  ?>">
                                <input type="text" class="form-control mb-3" name="editorial" placeholder="Editorial" value="<?php echo $row['editorial']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>