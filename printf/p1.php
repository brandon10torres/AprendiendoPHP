<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$entero=255;
		printf("Valor entero en formato decimal %d <br>", $entero);
		printf("Valor entero en formato hexadecimal con letras mayúsculas %X <br>", $entero);
		printf("Valor entero en formato binario %b <br>", $entero);	
		printf("Valor entero en formato octal %o <br>", $entero);
		$letra=65;
		printf("Valor entero como caracter ascii %c <br>", $letra);
		$real=10.776;
		printf("Valor de tipo double %f <br>", $real);
		printf("Valor de tipo double indicando la cantidad de decimales a imprimir %0.2f <br>", $real);
		?>
		<br>
		<a href="p2.php">Algunas utilidades de las conversiones</a>
</body>
</html>