<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
</head>
<body>
	<p>SUMA|RESTA RADIO</p>
	<form action="operaciones.php" method="post">
		Ingrese primer valor:
		<input type="text" name="valor1">
		<br>
		Ingrese segundo valor:
		<input type="text" name="valor2">
		<br>
		<input type="radio" name="radio1" value="suma">Sumar
		<br>
		<input type="radio" name="radio1" value="resta">Restar
		<br>
		<input type="submit" name="operar">
	</form>
	
	<br>
	<p>SUMA|RESTA CHECK</p>
	<form action="operaciones.php" method="post">
		Ingrese primer valor:
		<input type="text" name="valor1">
		<br>
		Ingrese segundo valor
		<input type="text" name="valor2">
		<br>
		<input type="checkbox" name="check1">Sumar
		<br>
		<input type="checkbox" name="check2">Restar
		<br>
		<input type="submit" name="operar">
	</form>
	
	<br>
	<p>EJEMPLO DEPORTES</p>
	<form action="operaciones.php" method="post">
		Ingrese el nombre:
		<input type="text" name="nombre">
		<br>
		Deportes que practica
		<br>
		<input type="checkbox" name="check_1">Fútbol
		<br>
		<input type="checkbox" name="check_2">Basquet
		<br>
		<input type="checkbox" name="check_3">Tenis
		<br>
		<input type="checkbox" name="check_4">Voley
		<br>
		<input type="submit" value="confirmar">
	</form>
	
	<br>
	<p>FORMULARIO SELECT</p>
	<form action="operaciones.php" method="post">
		Ingrese primer valor:
		<input type="text" name="v1">
		<br>
		Ingresa segundo valor:
		<input type="text" name="v2">
		<br>
		<select name="ope">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
		</select>
		<br>
		<input type="submit" name="oper">
	</form>
</body>
</html>