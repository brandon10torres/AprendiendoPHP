<?php
	if(isset($_REQUEST['pos']))
	{
		$inicio=$_REQUEST['pos'];
	}
	else
	{
		$inicio=0;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas en la conexión");
		$registros=mysqli_query($conexion, "select ID, Nombre, Email, a.CodigoCurso, NombreCurso from Alumnos as a inner join Cursos as c on c.CodigoCurso=a.CodigoCurso limit $inicio, 2") or die("Problemas en el select: " . mysqli_error($conexion));
		$impresos=0;
		while($registro=mysqli_fetch_array($registros))
		{
			$impresos++;
			echo "ID: " . $registro['ID'] . "<br>";
			echo "Nombre: " . $registro['Nombre'] . "<br>";
			echo "Email: " . $registro['Email'] . "<br>";
			echo "Curso: " . $registro['NombreCurso'] . "<br>";
			echo "<hr>";
		}
		if($inicio==0)
		{
			echo "Anteriores";
		}
		else
		{
			$anterior=$inicio-2;
			echo "<a href=\"paginacion.php?pos=$anterior\">Anteriores</a>";
		}
		if($impresos==2)
		{
			$proximo=$inicio+2;
			echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
		}
		else
		{
			echo "Siguientes";
		}
		mysqli_close($conexion);
	?>
</body>
</html>