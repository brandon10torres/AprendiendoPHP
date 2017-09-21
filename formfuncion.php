<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="formfuncion.php" method="post">
		Ingrese nombre de usuario:
		<input type="text" name="usuario">
		<br>
		Ingrese clave:
		<input type="password" name="clave1">
		<br>
		Repita clave:
		<input type="password" name="clave2">
		<br>
		<input type="submit" name="confirmar">
	</form>
	<!--VALIDAR CLAVE-->
	<?php

  		function verificarClaves($cla1,$cla2)
  		{
    		if ($cla1!=$cla2)
		 	echo "Las claves ingresadas son distintas";
		 	else
		 	{
		 		echo "<h2>Se verificaron las claves ingresadas.</h2>";
		 	}
  		}
  	
  		verificarClaves($_REQUEST['clave1'],$_REQUEST['clave2']);
  		
	?>

</body>
</body>
</html>