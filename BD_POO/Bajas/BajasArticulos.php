<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$mysql = new mysqli("localhost", "root", "root", "BD_php");
		if($mysql->connect_error)
		{
			die("Problemas en la conexión");
		}
		$registros=$mysql->query("select Descripcion from Articulos where IDArticulo=$_REQUEST[id]") or die($mysql->error);
		if($registro=$registros->fetch_array())
		{
			$mysql->query("delete from Articulos where IDArticulo=$_REQUEST[id]") or die($mysql->error);
			echo "Articulo eliminado";
		}
		else
		{
			echo "No existe el articulo";
		}
		$mysql->close();
	?>
</body>
</html>