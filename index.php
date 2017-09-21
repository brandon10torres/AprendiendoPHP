
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	echo "EJEMPLO 1";
	echo("<br>");
	$dia=date("d");
	if ($dia<=18) 
	{
		echo "sitio activo";
	}
	else
	{
		echo "sitio fuera de servicio";
	}
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 2";
	echo "<br>";
	$num=rand(1,100);
	echo $num;
	echo "<br>";
	if ($num<=50)
	 {
		echo "es menor o igual a 50";
	}
	else
	{
		echo "es mayor a 50";
	}
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 3";
	echo "<br>";
	$day=18;
	$sueldo=1500.50;
	$nombre="Torres";
	$existe=true;
	echo "Variable entera: ";
	echo $day;
	echo "<br>";
	echo "Variable double: ";
	echo "$sueldo";
	echo "<br/>";
	echo "Variable string: ";
	echo $nombre;
	echo "<br>";
	echo "Variable boolean: ";
	echo $existe;
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 4";
	echo "<br>";
	$cadena1="Brandon";
	$edad=20;
	$todo=$cadena1 . " " . $edad;
	echo $todo;
	echo "<br>";
	echo $cadena1 . " tiene $edad de edad";
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 5";
	echo "<br>";
	$valor=rand(1,100);
	echo "El valor sorteado es $valor <br>";
	if ($valor<=9)
	{
		echo "Tiene un digito";
	}
	else
	{
		if ($valor<100) 
		{
			echo "Tiene 2 digitos";
		}
		else
		{
			echo "Tiene 3 digitos";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 6";
	echo "<br>";
	$numero=rand(1,3);
	echo $numero;
	echo "<br>";
	if ($numero==1)
	{
		echo "uno";
	}
	else if ($numero==2)
	{
		echo "dos";
	}
	else
	{
		echo "tres";
	}
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 7";
	echo "<br>";
	for ($i=1;$i<=100;$i++)
	{
		echo $i;
		echo "<br>";
	}
	/*
	$valor=rand(1,100);
	$inicio=1;
	while($inicio<=$valor)
	{
  		echo $inicio;
  		echo "<br>";
  		$inicio++;
	}
	*/
	echo "<br>";
	echo "<br>";
	echo "EJEMPLO 8";
	echo "<br>";
	echo "Tabla del 2 con el for";
	echo "<br>";
	for($f=2;$f<=20;$f=$f+2)
  	{
    	echo $f;
    	echo "-";
  	}
  	/*
	echo "Tabla del 2 con el while";
  	echo "<br>";
  	$f=2;
  	while ($f<=20)
  	{
   		echo $f;
   		echo "-";
		$f=$f+2;
	}
  	echo "<br>";
  	echo "Tabla del 2 con el do/while";
  	echo "<br>";
 	 $f=2;
  	do 
  	{
    	echo $f;
    	echo "-";
		$f=$f+2;	
  	} 
  	while ($f<=20);
  	*/
  	echo "<br>";
  	echo "<br>";
  	echo "EJEMPLO 9";
  	echo "<br>";  	
?>
	<form method="post" action="index.php">
		Ingrese su nombre:
		<input type="text" name="nombre">
		<br>
		Ingrese su edad:
		<input type="text" name="edad">
		<br>
		<input type="submit" value="confirmar">
	</form>
<?php	
	echo "El nombre ingresado es: ";
	echo $_REQUEST['nombre'];
	echo "<br>";
	if ($_REQUEST['edad']>=18)
	{
		echo "Es mayor de edad";
	}
	else
	{
		echo "No es mayor de edad";
	}
	?>
</body>
</html>