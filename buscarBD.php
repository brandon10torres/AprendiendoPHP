<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die ("Problemas con la conexión");
		$registros=mysqli_query($conexion, "select ID, Nombre, Email,  CodigoCurso from Alumnos where Nombre='$_REQUEST[nombus]'") or die ("Problemas en el select: " . mysqli_error($conexion));
		if ($registro=mysqli_fetch_array($registros))
		{
			echo "ID: " . $registro['ID'] . "<br>";
			echo "Nombre: " . $registro['Nombre'] . "<br>";
			echo "Email: " . $registro['Email'] . "<br>";
			echo "Curso: ";
			switch ($registro['CodigoCurso']) 
			{
				case 1: echo "PHP";
					break;
				case 2: echo "ASP";
					break;
				case 3: echo "JSP";
					break;
			}
		}
		else
		{
			echo "No existe el alumno";
		}
		mysqli_close($conexion);
	?>

</body>
</html>