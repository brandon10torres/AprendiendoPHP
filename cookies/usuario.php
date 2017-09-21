<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="cookie.php" method="post">
		Ingrese su usuario:
		<input type="text" name="usuario" value="<?php if (isset($_COOKIE['usuario'])) echo $_COOKIE['usuario'];?>">
		<br>
		<input type="checkbox" name="check">Recordar
		<br>
		<input type="submit" value="Confirmar">
	</form>
</body>
</html>