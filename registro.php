<?php 
include("conexion.php");
?>

<html>
<head>
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>

<div class="body">

 <div class="formulario">

 <h1>Registrarse</h1>

 <br/><br/><br/>

 <form method="POST" action="<?php $_SERVER["PHP_SELF"]?>">

 <input type="text" placeholder="Ingrese un nombre de Usuario" name="registro_usuario" required="required"><br/>
 <input type="password" placeholder="Ingrese una Contraseña" name="registro_password" required="required"><br>
 <input class="submit" type="submit" value="Registrarse"><br/>
 </form>

 <p>¿Ya tienes cuenta? <a style="color:blue;" href="login.php">Acceder</a></p>

 </div>

</div>


<?php

$registro_usuario = $_POST["registro_usuario"];
$registro_pass = $_POST["registro_password"];

$sql_2 = "SELECT * FROM usuarios_login WHERE usuario = '$registro_usuario'";
$busqueda = $conexion->query($sql_2);

if ($busqueda->num_rows > 0) {
   echo "Este usuario ya existe";
} else {
    $sql_3 = "INSERT INTO usuarios_login (usuario, pass) VALUES ('$registro_usuario', '$registro_pass')";

    if ($conexion->query($sql_3) === TRUE) {
        echo "Usuario Registrado";
    } else {
        echo "Ha ocurrido un error";
    }

}


?>


</body>
</html>