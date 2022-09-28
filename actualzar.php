<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

$id= $_GET['id'];

$sql = "SELECT * FROM `empleados` WHERE id='$id'";
$query = mysqli_query($conexionBD,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <form action="update.php" method="POST">
                    <h1 class="text-center">Actualizando empleado: <?php echo $row['nombre'] ?></h1>
                        
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        
                        <label class="mb-3">Nombre empleado:</label>
                        <input type="text" class="form-control mb-3" name="nombre2" value="<?php echo $row['nombre'] ?>">
                        <label class="mb-3">Correo empleado:</label>
                        <input type="email" class="form-control mb-3" name="correo2" value="<?php echo $row['correo'] ?>">

                        <input type="submit" class="btn btn-warning bnt-lg" value="Actualizar">
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
</body>
</html>