<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.tablalistado
		{
			border-collapse: collapse;
			box-shadow: 0px 0px 8px #000;
			margin: 20px;			
		}
		.tablalistado th
		{
			border: 1px solid #000;
			padding: 5px;
			background-color: #ffd040;
		}
		.tablalistado td
		{
			border: 1px solid #000;
			padding: 5px;
			background-color: #ffdd73;
		}
	</style>
</head>
<body>
	<?php  
		$mysql=new mysqli("localhost", "root", "root", "BD_php");
		if($mysql->connect_error)
		{
			die("Problemas con la conexión");
		}
		$registros=$mysql->query("select IDArticulo, a.Descripcion as Articulo, Precio, r.Descripcion as Rubro from Articulos as a inner join Rubros as r on a.IDRubro=r.IDRubro") or die($mysql->error);
		echo '<table class="tablalistado">';
		echo '<tr><th>IDArticulo</th><th>Articulo</th><th>Precio</th><th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';
		while($registro=$registros->fetch_array())
		{
			echo '<tr>';
			echo '<td>';
			echo $registro['IDArticulo'];
			echo '</td>';
			echo '<td>';
			echo $registro['Articulo'];
			echo '</td>';
			echo '<td>';
			echo $registro['Precio'];
			echo '</td>';
			echo '<td>';
			echo $registro['Rubro'];
			echo '</td>';
			echo '<td>';
			echo '<a href="BajaArticulo.php?id=' . $registro['IDArticulo'] . '">Borrar</a>';
			echo '</td>';
			echo '<td>';
			echo '<a href="ModificarArticulo1.php?id=' . $registro['IDArticulo'] . '">Modificar</a>';
			echo '</td>';
			echo '</tr>';
		}
		echo '<tr><td colspan="6">';
		echo '<a href="AltaArticulo1.php">Agrega artículo</a>';
		echo '</td>';
		echo '</tr>';
		echo '</table>';
		$mysql->close();
	?>
</body>
</html>