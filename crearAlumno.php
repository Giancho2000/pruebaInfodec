<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Alumno Nuevo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">

        <div class="row">
            
                <form action="insertar.php" method="POST" class="row g-3">
                    <h1 class="text-center">Crear notas a estudiante</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1">Nombre estudiante:</label>
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Pepito perez">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 1:</label>
                            <input type="number" class="form-control mb-3" name="nota1" >
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 2:</label>
                            <input type="number" class="form-control mb-3" name="nota2">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 3:</label>
                            <input type="number" class="form-control mb-3" name="nota3" >
                        </div>

                        <a></a>
                    </div>
                        <input type="submit" class="btn btn-success">
                </form>
            
        </div>
    </div>

</body>
</html>