<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexión");
		mysqli_query($conexion, "insert into Alumnos(Nombre, Email, CodigoCurso) values ('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[codigocurso])") or die("Problemas en el select: " . mysqli_error($conexion));
		mysqli_close($conexion);
		echo "El alumno fue dado de alta";
	?>
</body>
</html>