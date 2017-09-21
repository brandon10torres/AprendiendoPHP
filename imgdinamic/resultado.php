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
		if($_SESSION['numeroaleatorio']==$_REQUEST['digitos'])
		{
			echo "Ingreso los digitos correctos";
		}
		else
		{
			echo "Digitos incorrectos";
		}
	?>
</body>
</html>