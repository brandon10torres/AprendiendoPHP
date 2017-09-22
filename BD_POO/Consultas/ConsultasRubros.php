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
		{
			echo "La descipción del rubro es: " . $registro['Descripcion'];
		}
		else
		{
			echo "No existe el rubro con ese ID";
		}
		$mysql->close();
	?>
</body>
</html>