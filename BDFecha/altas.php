<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas en la conexión");
		$fechanacimiento=$_REQUEST['año'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
		mysqli_query($conexion, "insert into Alumnos(Nombre, Email, FechaNacimiento, CodigoCurso) values ('$_REQUEST[nombre]', '$_REQUEST[email]', '$fechanacimiento', $_REQUEST[codigocurso])") or die("Problemas en el select " . mysqli_error($conexion));
		mysqli_close($conexion);
		echo "Alumno registrado";
	?>
	<br>
	<a href="consultas.php">Ver listado de alumnos</a>
</body>
</html>