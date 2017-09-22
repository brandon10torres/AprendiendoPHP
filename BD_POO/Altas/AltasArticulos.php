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
		$mysql->query("insert into Articulos (Descripcion, Precio, IDRubro) values ('$_REQUEST[descripcion]', $_REQUEST[precio], $_REQUEST[idrubro])") or die($mysql->error);
		echo "Articulo registrado";
	?>
</body>
</html>