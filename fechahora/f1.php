<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "La fecha de hoy es: ";
		$fecha=date("d/m/Y");
		echo $fecha;
		echo "<br>";
		echo "La hora actual es: ";
		$hora=date("H:i:s");
		echo $hora;
		echo "<br>";
	?>
	<a href="f2.php">Siguiente</a>
</body>
</html>