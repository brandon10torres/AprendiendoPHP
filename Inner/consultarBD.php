<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php");
		$registros=mysqli_query($conexion, "select a.ID, Nombre, Email, c.CodigoCurso, NombreCurso from Alumnos as a inner join Cursos as c on c.CodigoCurso=a.CodigoCurso") or die("Problemas en el select: " . mysqli_error($conexion));
		while ($registro=mysqli_fetch_array($registros))
		{
			echo "ID: " . $registro['ID'] . "<br>";
			echo "Nombre: " . $registro['Nombre'] . "<br>";
			echo "Email: " . $registro['Email'] . "<br>";
			echo "Curso: " . $registro['NombreCurso'] . "<br>";
			echo "<hr>";
		}
		mtsqli_close($conexion);
	?>
</body>
</html>