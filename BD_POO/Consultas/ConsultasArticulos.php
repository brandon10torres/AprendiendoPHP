<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$mysql= new mysqli("localhost", "root", "root", "BD_php");
		if($mysql->connect_error)
		{
			die("Problemas en la conexión");
		}
		$registros=$mysql->query("select IDArticulo, a.Descripcion as Articulo, Precio, r.Descripcion as Rubro from Articulos as a inner join Rubros as r on a.IDRubro=r.IDRubro where a.IDArticulo=$_REQUEST[id]") or die($mysql->error);
		if($registro=$registros->fetch_array())
		{
			echo "Articulo: " . $registro['Articulo'] . "<br>";
			echo "Precio: " . $registro['Precio'] . "<br>";
			echo "Rubro: " . $registro['Rubro'] . "<br>";
		}
		else
		{
			echo "No existe el articulo";
		}
		$mysql->close();
	?>
</body>
</html>