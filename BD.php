<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

	<?php
		/*INSERTAR*/
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas de conexion");
		mysqli_query($conexion, "insert into Alumnos(Nombre, Email, CodigoCurso) values ('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[CodigoCurso])") or die("Probemas en el select " . mysqli_error($conexion));
		
		echo "Alumno registrado";
		echo "<br>";
		/*CONSULTAR*/
		$registros=mysqli_query($conexion, "select * from Alumnos") or die ("Problemas en el select: " . mysqli_error($conexion));
		while ($registro=mysqli_fetch_array($registros))
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
			echo "<br>";
			echo "<hr>";
		}
		mysqli_close($conexion);
	?>











</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>