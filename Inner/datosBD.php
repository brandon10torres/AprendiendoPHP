<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insertarBD.php" method="post">
		Ingrese el nombre:
		<input type="text" name="nombre">
		<br>
		Ingrese el email:
		<input type="text" name="email">
		<br>
		Seleccione el curso:
		<select name="codigocurso">
			<?php
				$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexion");
				$registros=mysqli_query($conexion, "select CodigoCurso, NombreCurso from Cursos") or die("Problemas en el select: " . mysqli_error($conexion));
				while ($registro=mysqli_fetch_array($registros))
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