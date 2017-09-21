<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$registro['dni']="10";
		$registro['nombre']="Brandon Torres";
		$registro['direccion']="Valle";
		/*Otra forma de declarar
		$registro=array('dni' => '10'
						'nombre' => 'Brandon Torres'
						'direccion' => 'Valle');
		*/
		echo $registro['dni'] . "<br>";
		echo $registro['nombre'] . "<br>";
		echo $registro['direccion'];
	?>
</body>
</html>