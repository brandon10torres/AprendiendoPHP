<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		h1
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		function mostrartitulo($men)
		{
			echo "<h1>";
			echo $men;
			echo "</h1>";
		}
		mostrartitulo("Primer titulo");
		echo "<br>";
		mostrartitulo("Segundo titulo");

		function retornardivision($valor1, $valor2)
		{
			$division=$valor1/$valor2;
			return $division;
		}
		$v1=100;
		$v2=50;
		$d=retornardivision($v1, $v2);
		echo $d;
	?>
	<br>
	<!--CUADRADO Y CUBO-->
	<?php 
		function cuadradocubo($valor, &$cuad, &$cub)
		{
			$cuad=$valor*$valor;
			$cub=$valor*$valor*$valor;
		}
		cuadradocubo(2, $c1, $c2);
		echo "El cuadrado de 2 es: " . $c1 . "<br>";
		echo "El cubo de 2 es: " . $c2 . "<br>";
	?>
	

</body>
</html>