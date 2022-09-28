<?php
    include("conexion.php"); //Incluye el archivo o da acceso a el.
    $conexionBD = conectar(); //invoca la conexion

$id= $_GET['id'];

$sql = "DELETE FROM `empleados` WHERE id='$id'";
$query = mysqli_query($conexionBD,$sql);

if ($query) {
    Header("Location: alumno.php");
}
?>