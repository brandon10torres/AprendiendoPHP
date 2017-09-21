<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$txt=fopen("orden.txt", "r") /*"a":lo crea si ya existe añade datos al final. "w": lo crea si ya existe borra su contenido. "r": lo abre para lectura */ or die("No se pudo abrir el archivo");
		while (/*mientras no llegue al final*/!feof/*para llegar al final del archivo*/($txt)) 
		{
			$linea=fgets/*lee una liena*/($txt);
			$linesalto=nl2br/*new line to br*/($linea);
			echo $linesalto;
		}
		fclose($txt);
	?>
</body>
</html>