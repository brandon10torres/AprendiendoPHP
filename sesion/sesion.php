<?php
	session_start();
	$_SESSION['usu']=$_REQUEST['usuario'];
	$_SESSION['con']=$_REQUEST['contraseña'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	Se almacenaron 2 variables de sesión
	<br>
	<br>
	<a href="datos.php">Recuperar variables</a>
</body>
</html>