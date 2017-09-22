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
			die("Problemas de conexión");
		}
		$registros=$mysql->query("select Descripcion from Rubros where IDRubro=$_REQUEST[id]") or die($mysql->error);
		if($registro=$registros->fetch_array())
		{
			$mysql->query("delete from Rubros where IDRubro=$_REQUEST[id]") or die($mysql->error);
			echo "Se elimino el rubro " . $registro['Descripcion'];
		}
		else
		{
			echo "No existe ese rubro";
		}
		$mysql->close();
	?>
</body>
</html>