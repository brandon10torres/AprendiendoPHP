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
		$registros=$mysql->query("select IDRubro, Descripcion from Rubros") or die($mysql->error);
		echo '<table class="tablalistado">';
		echo '<tr><th>IDRubro</th><th>Descripción</th></tr>';
		while($registro=$registros->fetch_array())
		{
			echo '<tr>';
			echo '<td>';
			echo $registro['IDRubro'];
			echo '</td>';
			echo '<td>';
			echo $registro['Descripcion'];
			echo '</td>';
			echo '</tr>';
		}
		echo "</table>";
		$mysql->close();
	?>
</body>
</html>