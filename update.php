<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

$id= $_GET['id'];
$nombre= $_POST['nombre2'];
$correo= $_POST['correo2'];

$sql = "UPDATE `empleados` SET nombre='$nombre',correo='$correo' WHERE id='$id'";
$query = mysqli_query($conexionBD,$sql);

if ($query) {
    Header("Location: alumno.php");
}
?>