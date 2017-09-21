<?php
	if ($_REQUEST['radio']=="rojo")
	{
		setcookie("color", "#ff0000", time()+60*60*24*365, "/");

	}
	elseif($_REQUEST['radio']=="verde")
	{
		setcookie("color", "#00ff00", time()+60*60*24*365, "/");
	}
	elseif($_REQUEST['radio']=="azul")
		setcookie("color", "#0000ff", time()+60*60*24*365, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	Se creo la cookie
	<br>
	<a href="crear.php">Ir a la otra página</a>
</body>
</html>