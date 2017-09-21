<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexión");
		mysqli_query($conexion, "update Alumnos
									set Nombre='$_REQUEST[nombrenuevo]'
									where Nombre='$_REQUEST[nombreviejo]'") or die("Problemas en el select: " . mysqli_error($conexion));
		echo "El alumno fue modificado";
	?>
</body>
</html>