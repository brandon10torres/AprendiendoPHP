<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		if (is_numeric($_REQUEST['dia']) && is_numeric($_REQUEST['mes']) && is_numeric($_REQUEST['año']))
		{
			if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['año']))
			{
				echo "La fecha ingresada es correcta";
			}
			else
			{
				echo "La fecha no es valida";
			}
		}
		else
		{
			echo "La fecha no es valida";
		}
	?>
</body>
</html>