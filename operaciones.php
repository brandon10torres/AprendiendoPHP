<!--SUMA RESTA RADIO-->
<?php
		if ($_REQUEST['radio1']=="suma")
		{
			$suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
			echo "La suma es: " . $suma;
		}
		else if ($_REQUEST['radio1']=="resta")
		{
			$resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
			echo "La resta es: " . $resta;
		}
	?>

	<!--SUMA RESTA CHECK-->
	<?php
		if (isset($_REQUEST['check1']))
		{
			$suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
			echo "La suma es : " . $suma . "<br>";
		}
		if (isset($_REQUEST['check2']))
		{
			$resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
			echo "La resta es: " . $resta . "<br>";
		}
	?>

	<!--EJEMPLO DEPORTES-->
	<?php
		$cantidad=0;
		if (isset($_REQUEST['check_1']))
		{
			$cantidad++;
		}
		if (isset($_REQUEST['check_2']))
		{
			$cantidad++;
		}
		if (isset($_REQUEST['check_3']))
		{
			$cantidad++;
		}
		if (isset($_REQUEST['check_4']))
		{
			$cantidad++;
		}
		echo $_REQUEST['nombre'];;
		echo " practica $cantidad deportes";
	?>

	<!--FORMULARIO SELECT-->
	<?php
	if ($_REQUEST['ope']=="suma")
	{
		$sum=$_REQUEST['v1'] + $_REQUEST['v2'];
		echo "La suma es: " . $sum;
	}
	else if ($_REQUEST['ope']=="resta")
	{
		$res=$_REQUEST['v1'] - $_REQUEST['v2'];
		echo "La resta es: " . $res;
	}
	?>

	<!--TEXTAREA-->
	<?php
		echo "El nombre ingresado: " . $_REQUEST['nombre'];
		echo "<br>";
		echo "El curriculum: " . $_REQUEST['curriculum'];
	?>

	