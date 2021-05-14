<?php
$servername = "localhost";
$database = "artesanias";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conneccion fallida: " . mysqli_connect_error());
    echo "error de conexion";
}
?>