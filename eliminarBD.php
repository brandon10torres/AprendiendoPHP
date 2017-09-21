<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die ("Problemas de conexion");
		$registros=mysqli_query($conexion, "select ID from Alumnos where Nombre='$_REQUEST[nomeli]'") or die ("Problemas en el select: " . mysqli_error($conexion));
		if ($registro=mysqli_fetch_array($registros))
		{
			mysqli_query($conexion, "delete from Alumnos where Nombre='$_REQUEST[nomeli]'") or die ("Problemas en el select: " .  mysqli_error($conexion));
			echo "Alumno borrado";
		}
		else 
		{
			echo "No existe el alumno";
		}
		mysqli_close();

	?>
</body>
</html>