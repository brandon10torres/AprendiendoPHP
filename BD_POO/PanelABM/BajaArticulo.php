<?php  
	$mysql=new mysqli("localhost", "root", "root", "BD_php");
	if($mysql->connect_error)
	{
		die("Problemas con la conexión");
	}
	$mysql->query("delete from Articulos where IDArticulo=$_REQUEST[id]") or die($mysql->error);
	$mysql->close();
	header('Location:index.php');
?>