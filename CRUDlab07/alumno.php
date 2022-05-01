<?php 
    include('header.php');
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM biblioteca";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> BIBLIOTECA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese nuevo libro</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_libro" placeholder="cod_libro">
                                    <input type="text" class="form-control mb-3" name="afecha" placeholder="Afecha">
                                    <input type="text" class="form-control mb-3" name="autor" placeholder="Autor">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo">
                                    <input type="text" class="form-control mb-3" name="url_ubicacion" placeholder="Url_ubicacion">
                                    <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
                                    <input type="text" class="form-control mb-3" name="editorial" placeholder="Editorial">
                                    
                                    <input type="submit" class="btn btn-primary"target="click" onclick="return confirm('Usted agregara este nuevo dato recuerde respetar el orden del ID')"alt="">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Afecha</th>
                                        <th>Autor</th>
                                        <th>Titulo</th>
                                       
                                        <th>Especialidad</th>
                                        <th>Editorial</th>
                                        
                                        <th>Leer libro</th>
                                        <th>Editar libro</th>
                                        <th>Borrar libro</th>
                                         
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_libro']?></th>
                                                <th><?php  echo $row['afecha']?></th>
                                                <th><?php  echo $row['autor']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['especialidad']?></th> 
                                                <th><?php  echo $row['editorial']?></th>
                                                
                                                
                                                <th>  <a href="<?php  echo $row['url_ubicacion']?>"target="click" onclick="return confirm('Se le enviará a otra pestaña')"alt="" ><?php  echo $row['url_ubicacion']?> </a> </th>


                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_libro'] ?>" class="btn btn-info" target="click" onclick="return confirm('Seguro que desea editar')"alt="">Editar</a></th>
                                                
                                                <th><a href="delete.php?id=<?php echo $row['cod_libro'] ?>" class="btn btn-danger"target="click" onclick="return confirm('Seguro que desea eliminar no abra vuelta atras :(')"alt="">Eliminar</a></th>                                        
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


