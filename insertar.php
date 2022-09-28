<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

$nombre= $_POST['nombre'];
$correo= $_POST['correo'];

$sql = "INSERT INTO `empleados` VALUES('','$nombre','$correo')";
$query = mysqli_query($conexionBD,$sql);

if ($query) {
    Header("Location: alumno.php");
}
?>