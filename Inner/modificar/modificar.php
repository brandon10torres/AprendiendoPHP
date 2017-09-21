<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die("Problemas con la conexión");
		$registros=mysqli_query($conexion, "select * from Alumnos where Nombre='$_REQUEST[nombre]'") or die("Problemas en el select: " . mysqli_error($conexion));
		if ($regalu=mysqli_fetch_array($registros))
		{
			?>
			<form action="actualizar.php" method="post">
			<input type="hidden" name="nombreviejo" value="<?php echo $registro['nombre'] ?>">
			<select name="codigocurso">
			<?php
			$registros=mysqli_query($conexion, "select * from cursos") or die("Problemas en el select: " . mysqli_error($conexion));
			while($reg=mysqli_fetch_array($registros))
			{
				if($regalu['CodigoCurso']==$reg['CodigoCurso'])
				{
					echo "<option value=\"$reg[CodigoCurso]\" selected>$reg[NombreCurso]</option>";
				}
				else
				{
					echo "<option value=\"$reg[CodigoCurso]\"> $reg[NombreCurso]</option>";
				}
			}
			?>
			</select>
			<br>
			<input type="submit" value="Modificar">
			</form>
			<?php
			}
			else
			{
				echo "No existe el alumno";
			}
			?>
	
</body>
</html>