<?php 
 
$url = "localhost:3307";
$user = "root";
$pass = "";
$database = "my_db";

$conexion = new mysqli($url,$user,$pass,$database);

if($conexion->connect_error){
die("Ha ocurrido un error" . $conexion->connect_error);
}

//echo "Conexion Exitosa";

?>