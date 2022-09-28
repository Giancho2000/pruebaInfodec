<?php
function conectar(){
    // Conecta a la base de datos  con usuario, contraseña y nombre de la BD
    $servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "cursos";
    $conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);

        return $conexionBD;
}
?>