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
		$mysql->query("insert into Rubros(Descripcion) values ('$_REQUEST[descripcion]')") or die($mysql->error);
		$mysql->close();
		echo "Rubro almacenado";
	?>
</body>
</html>