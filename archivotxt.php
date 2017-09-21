<!DOCTYPE html>
<html>
<head>
	<title>TXT</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="creartxt.php" method="post">
		Ingrese nombre:
		<input type="text" name="nombre">
		<br>
		Comentarios:
		<br>
		<textarea name="mensaje" rows="10" cols="40"></textarea>
		<br>
		<input type="submit" value="Registrar">
	</form>
	<br>
	<!--PIZZAS-->
	<form action="creartxt.php" method="post">
		Nombre:
		<input type="text" name="nom" size="30">
		<br>
		Dirección:
		<input type="text" name="direccion" size="40">
		<br>
		Jamon y Queso:
		<input type="checkbox" name="jamonqueso">
		<input type="text" name="cantjamonqueso" size="3">
		<br>
		Napolitana:
		<input type="checkbox" name="napolitana">
		<input type="text" name="cantnapolitana" size="3">
		<br>
		Muzzarella:
		<input type="checkbox" name="muzzarella">
		<input type="text" name="cantmuzzarella" size="3">
		<br>
		<input type="submit" name="Confirmar">
	</form>
</body>
</html>