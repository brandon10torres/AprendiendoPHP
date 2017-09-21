<?php
	if(isset($_REQUEST['check']))
	{
		setcookie("usuario", $_REQUEST['usuario'], time()+(60*60*24*365), "/");
		echo "<p>Cookie creada </p>";
	}
	else
	{
		setcookie("usuario", "", time()-1000, "/");
		echo "<p>Cookie eliminada</p>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="usuario.php">Ir a la otra página</a>
</body>
</html>