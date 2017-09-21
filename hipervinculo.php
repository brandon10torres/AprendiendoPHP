<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "Listado de la tabla del $_REQUEST[tabla] <br>";
		for ($i=1; $i<=10 ; $i++) 
		{ 	
			$valor=$i*$_REQUEST['tabla'];
			echo $valor . "<br>";
		}
	?>
</body>
</html>