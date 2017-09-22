<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$mysql=new mysqli("localhost", "root", "root", "BD_php");
		if($mysql->connect_error)
		{
			die("Problemas en la conexión");
		}
		$registro=$mysql->query("select Descripcion, Precio, IDRubro from Articulos where IDArticulo=$_REQUEST[id]") or die($mysql->error);

		if ($reg=$registro->fetch_array())
    	{
  	?>
    	<form method="post" action="ModificarArticulo2.php">
    		Descripción del artículo:
      		<input type="text" name="descripcion" size="50" value="<?php echo $reg['Descripcion']; ?>">
      		<br>
      		Precio
      		<input type="text" name="precio" size="10" value="<?php echo $reg['Precio']; ?>">      
      		<br>      
      		Rubro:
      		<select name="idrubro">
    <?php
      	$registros2=$mysql->query("select IDRubro, Descripcion from Rubros") or
        die($mysql->error);
      	while ($reg2=$registros2->fetch_array())
      	{
        	if ($reg2['IDRubro']==$reg['IDRubro'])
           		echo "<option value=\"".$reg2['IDRubro']."\" selected>".$reg2['Descripcion']."</option>";
         	else
           		echo "<option value=\"".$reg2['IDRubro']."\">".$reg2['Descripcion']."</option>";
      	}        
    ?>  
      		</select>      
      
      		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">     
      		<br> 
      		<input type="submit" value="Confirmar">
    	</form>
  	<?php
    	}      
    	else
      		echo 'No existe un artículo con dicho código';
    
    	$mysql->close();
	?>
</body>
</html>