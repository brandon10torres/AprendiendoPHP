<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "Usuario: " . $_SESSION['usu'];
		echo "<hr>";
		echo "Contraseña: " . $_SESSION['con'];
	?>
</body>
</html>