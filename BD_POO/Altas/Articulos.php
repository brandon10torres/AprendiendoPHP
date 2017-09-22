<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="AltasArticulos.php" method="post">
		Descripción:
		<input type="text" name="descripcion" required>
		<br>
		Precio:
		<input type="text" name="precio" required>
		<br>
		Rubro:
		<select name="idrubro">
			<?php  
				$mysql=new mysqli("localhost", "root", "root", "BD_php");
				if($mysql->connect_error)
				{
					die("Problemas en la conexión");
				}
				$registros=$mysql->query("select IDRubro, Descripcion from Rubros") or die($mysql->error);
				while($registro=$registros->fetch_array())
				{
					echo "<option value=\"" .$registro['IDRubro'] . "\">" . $registro['Descripcion'] . "</option>";
				}
			?>
		</select>
		<br>
		<input type="submit" value="Confirmar">
	</form>
</body>
</html>