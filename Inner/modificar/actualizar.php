<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas de conexión");
		$registros=mysqli_query($conexion, "update Alumnos set CodigoCurso=$_REQUEST[codigocurso] where Nombre='$_REQUEST[nombreviejo]'") or die("Problemas en el select: " . mysqli_error($conexion));
		echo "El curso fue modificado";
	?>
</body>
</html>