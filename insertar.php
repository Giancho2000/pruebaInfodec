<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$nota1= $_POST['nota1'];
$nota2= $_POST['nota2'];
$nota3= $_POST['nota3'];

$sql = "INSERT INTO `empleados` VALUES('','$nombre','$correo','$nota1' , '$nota2', '$nota3')";
$query = mysqli_query($conexionBD,$sql);

if ($query) {
    Header("Location: alumno.php");
}
?>