<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="altas.php" method="post">
		Nombre:
		<input type="text" name="nombre">
		<br>
		Email:
		<input type="text" name="email">
		<br>
		Fecha nacimiento (dd/mm/aaaa):
		<input type="text" name="dia" size="2">
		<input type="text" name="mes" size="2">
		<input type="text" name="año" size="4">
		<br>
		Curso:
		<select name="codigocurso">
			<?php  
				$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con las conexión");
				$registros=mysqli_query($conexion, "select CodigoCurso, NombreCurso from Cursos") or die("Problemas en el select: " . mysqli_error($conexion));
				while($registro=mysqli_fetch_array($registros))
				{
					echo "<option value=\"$registro[CodigoCurso]\">$registro[NombreCurso]</option>";
				}
			?>
		</select>
		<br>
		<input type="submit" value="Registrar">
	</form>
</body>
</html>