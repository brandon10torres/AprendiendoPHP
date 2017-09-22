<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		function retornarColorHexa($rojo, $verde, $azul)
		{
			$color=sprintf("#%02X%02X%02X", $rojo, $verde, $azul);
			return $color;
		}
	?>
	<table>
		<tr>
			<td style="background: <?php echo retornarColorHexa(255,0,0); ?> ">ROJO</td>
			<td style="background: <?php echo retornarColorHexa(0,255,0); ?> ">VERDE</td>
			<td style="background: <?php echo retornarColorHexa(0,0,255); ?> ">AZUL</td>
		</tr>
	</table>
	<hr>
	<?php
  		$tabla="";
  		for($f=32;$f<=255;$f++)
 		{
   			 $tabla=$tabla.sprintf("%c",$f);
  		}
  		echo $tabla;
	?>
</body>
</html>