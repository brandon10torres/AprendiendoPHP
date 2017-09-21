<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost", "root", "root", "BD_php") or die ("Problemas con la conexión");
		$registros=mysqli_query($conexion, "select * from Alumnos where Nombre='$_REQUEST[nombre]'") or die("Problemas en el select: " . mysqli_error($conexion));
		if ($registro=mysqli_fetch_array($registros))
		{
			?>
			<form action="actualizarBD.php" method="post">
			Ingrese nuevo nombre:
			<input type="text" name="nombrenuevo">
			<br>
			<input type="hidden" name="nombreviejo" value="<?php echo $registro['nombre'] ?>">
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