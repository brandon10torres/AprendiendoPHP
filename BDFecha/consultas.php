<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexión");
		$registros=mysqli_query($conexion, "select ID, Nombre, Email, FechaNacimiento, c.CodigoCurso, NombreCurso from Alumnos as a inner join Cursos as c on c.CodigoCurso=a.CodigoCurso") or die("Problemas en el select " . mysqli_error($conexion));
		while($registro=mysqli_fetch_array($registros))
		{
			echo "ID: " . $registro['ID'] . "<br>";
			echo "Nombre: " . $registro['Nombre'] . "<br>";
			echo "Email: " . $registro['Email'] . "<br>";
			echo "Fecha de nacimiento: " . $registro['FechaNacimiento'] . "<br>";
			echo "Curso: " . $registro['NombreCurso'] . "<br>";
			echo "<hr>";
		}
		mysqli_close($conexion);
	?>
</body>
</html>