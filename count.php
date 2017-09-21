<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas en la conexión");
		$registros=mysqli_query($conexion, "select count(*) as Cantidad from Alumnos") or die("Problemas en el select: " . mysqli_error($conexion));
		$registro=mysqli_fetch_array($registros);
		echo "La cantidad de alumnos es: " . $registro['Cantidad'];
	?>
</body>
</html>