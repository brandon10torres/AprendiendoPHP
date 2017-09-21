<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexión");
		$registros=mysqli_query($conexion, "select count(a.ID) as Cantidad, NombreCurso from Alumnos as a inner join Cursos as c on c.CodigoCurso=a.CodigoCurso group by a.CodigoCurso") or die("Problemas en el select: " . mysqli_error($conexion));
		while($registro=mysqli_fetch_array($registros))
		{
			echo "Nombre del curso: " . $registro['NombreCurso'] . "<br>";
			echo "Cantidad de Alumnos: " . $registro['Cantidad'] . "<br>";
			echo "<hr>";
		}
	?>
</body>
</html>