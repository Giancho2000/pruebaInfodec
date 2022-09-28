<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

    $sql = "SELECT id, nombre, correo, nota1, nota2, nota3 FROM `empleados`"; //Creamos una variable que almacena el query requerido para la base de datos
    $query = mysqli_query($conexionBD,$sql); //Ejecuta el query
    $row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md">
                <h1 class="text-center">Notas Estudiantes</h1><br>
                    <table class="table">
                        <thead class="table-striped">
                            <tr>                                   
                                <th class="text-center">Nombre estudiante</th>   
                                <th class="text-center">Nota 1</th>   
                                <th class="text-center">Nota 2</th>   
                                <th class="text-center">Nota 3</th>   
                                <th class="text-center">Nota final</th>   
                            </tr>
                        </thead>
                        <tbody>

                            <?php   
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>

                            <tr> 
                                <th class="text-center"> <?php echo $row['nombre'] ?> </th>   
                                <th class="text-center"> <?php echo $row['nota1'] ?> </th>   
                                <th class="text-center"> <?php echo $row['nota2'] ?> </th>   
                                <th class="text-center"> <?php echo $row['nota3'] ?> </th>   
                                <th class="text-center"> <?php echo $row[] ?> </th>   
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                
                            </tr>

                            <?php   
                                }
                            ?>
                        </tbody>
                    </table>
                    
                    <a id="aggNuevo" href="crearAlumno.php" class="btn btn-success">Crear nuevo</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
</body>
</html>