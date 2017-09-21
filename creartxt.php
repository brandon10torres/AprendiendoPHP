<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<!--ARCHIVO TXT-->
	<?php
		$datos=fopen("datos.txt", "a") or die("Problemas en la creación");
		fputs($datos, $_REQUEST['nombre']);
		fputs($datos, "\n");
		fputs($datos, $_REQUEST['comentarios']);
		fputs($datos, "\n");
		fputs($datos, "----------------------------");
		fputs($datos, "\n");
		fclose($datos);
		echo "Los datos se cargaron correctamente";
	?>
	<!--PIZZAS-->
	<?php
		$orden=fopen("orden.txt", "a") or die ("Problemas");
		fputs($orden, "Nombre: ");
		fputs($orden, $_REQUEST['nom']);
		fputs($orden,"\n");
		fputs($orden,"Dirección:");
		fputs($orden,$_REQUEST['direccion']) . "<br>";
		
		if (isset($_REQUEST['jamonqueso']))
		{
	  		fputs($orden,"Cantidad de Jamón y Queso:");
	  		fputs($orden,$_REQUEST['cantjamonqueso']);
	  		fputs($orden,"\n") . "<br>";  
		}
		
		if (isset($_REQUEST['napolitana']))
		{
	 		fputs($orden,"Cantidad de Napolitana:");
	  		fputs($prdem,$_REQUEST['cantnapolitana']);
  			fputs($orden,"\n") . "<br>";  
		}
		
		if (isset($_REQUEST['muzzarella']))
		{
	  		fputs($orden,"Cantidad de Muzzarella:");
	  		fputs($orden,$_REQUEST['cantmuzzarella']);
	  		fputs($orden,"\n") . "<br>";  
		}

		fputs($orden,"-------------------------------------------	-------------");
		fputs($orden,"\n");
		fclose($orden);
		echo "El pedido se cargó correctamente.";
	?>
</body>
</html>
