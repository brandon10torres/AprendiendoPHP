<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="AltaArticulo2.php">
  		Ingrese descripcion del artículo:
  		<input type="text" name="descripcion" required>
  		<br>
  		Ingrese precio:
  		<input type="text" name="precio" required>
  		<br>
  		Seleccione rubro:
  		<select name="idrubro">
  		<?php
    		$mysql=new mysqli("localhost","root","root","BD_php");
    		if ($mysql->connect_error)
      		die("Problemas con la conexión a la base de datos");
  
    		$registros=$mysql->query("select IDRubro, Descripcion from Rubros") or
      		die($mysql->error);
    		while ($reg=$registros->fetch_array())
    		{
       			echo "<option value=\"".$reg['IDRubro']."\">".$reg['Descripcion']."</option>";
    		}        
  		?>  
  		</select>
  		<br>
  		<input type="submit" value="confirmar">
  	</form>
</body>
</html>