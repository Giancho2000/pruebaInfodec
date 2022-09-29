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
                            <input type="text" class="form-control mb-3" id="nombre" name="nombre" placeholder="Pepito perez">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 1:</label>
                            <input type="number" max="5.0" min="1.0" step="0.1" class="form-control mb-3" id="nota1" name="nota1">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 2:</label>
                            <input type="number" max="5.0" min="1.0" step="0.1" class="form-control mb-3" id="nota2" name="nota2">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Nota 3:</label>
                            <input type="number" max="5.0" min="1.0" step="0.1" class="form-control mb-3" id="nota3" name="nota3">
                        </div>

                        <a></a>
                    </div>                    
                        <input type="submit" class="btn btn-success" onclick="notEmpty()">
                </form>
        </div>
    </div>

</body>
</html>

<script>
        const a = document.getElementById('nombre');
        const b = document.getElementById('nota1');
        const c = document.getElementById('nota2');
        const d = document.getElementById('nota3');
        function notEmpty(){
            if (a.value.length<=0 || b.value.length<=0 || c.value.length<=0 || d.value.length<=0)  {
                
                alert('Pendiente de los campos');
                alert(`${a.value} ,${b.value},${c.value},${d.value}`);
                event.preventDefault();
                return;
            }
            event.currentTarget.submit();
        }
</script>