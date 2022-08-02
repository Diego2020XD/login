<?php 
session_start();

if (isset($_SESSION["usuario"])) {
   
?>

<html>
<head>
<title>Pagina Principal</title>
<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
<br/>
<h2>Bienvenido de nuevo: <?php echo $_SESSION["usuario"];?></h2><br/>
<h3>Su contraseña es: <?php echo $_SESSION["password"];?></h3> <br/>
<h3>Cerrar Sesion: <a href="cerrar_sesion.php">Click Aqui</a></h3><br/>

<img src="<?php echo $_SESSION["imagen"];?>" width="50%"> 



</body>
</html>

<?php
} else{
header("location:login.php");
}
?>