<?php 
session_start();
include("conexion.php");

if (isset($SESSION["usuario"])) {
    header("location:index.php");
}else {
    

?>

<html>
<head>
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="body">

 <div class="formulario">

 <h1>¡Bienvenido!</h1>

 <br/><br/><br/>

 <form method="POST" action="<?php $_SERVER["PHP_SELF"]?>">

 <input type="text" placeholder="Usuario" name="usuario" required="required"><br/>
 <input type="password" placeholder="Contraseña" name="password" required="required"><br>
 <input class="submit" type="submit" value="Acceder"><br/>
 </form>

 <p>¿No tienes cuenta? <a href="registro.php">Registrarse</a></p>


 </div>

</div>



<?php

}


/*--------Busqueda del usuario------------
Guardamos el dato del los inputs en dos variables 'usuario', 'Pass' y luego en otra variable hacemos la 
consulta 'sql'
*/

$usuario = $_POST["usuario"];
$pass = $_POST["password"];


$sql = "SELECT * FROM usuarios_login WHERE usuario = '$usuario' and pass = '$pass'";
$resul = $conexion->query($sql);
$row = $resul->fetch_assoc();

if ($resul->num_rows > 0) {
    $_SESSION["usuario"] = $row["usuario"];
    $_SESSION["password"] = $row["pass"];
    $_SESSION["imagen"] = $row["img"];
    $_SESSION["validacion"] = TRUE;
    header("location:index.php");

}


?>


</body>
</html>