<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$mysql=new mysqli("localhost", "root", "root", "BD_php");
		if($mysql->connect_error)
		{
			die("Problemas con la conexión");	
		}
		$registros=$mysql->query("select Descripcion from Rubros where IDRubro=$_REQUEST[id]") or die($mysql->error);
		if($registro=$registros->fetch_array())	
	?>
		<form action="ActualizarRubros.php" method="post">
			Descripción del rubro:
			<input type="text" name="descripcion" size="50" value=" <?php echo $registro['Descripcion']; ?> ">
			<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
			<br>
			<input type="submit" value="Confirmar">
		</form>
	<?php
		}
		else
		{
			echo "No existe el rubro";
		}
		$mysql->close();
	?>
</body>
</html>