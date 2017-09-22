<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
 <?php
    $mysql=new mysqli("localhost","root","root","BD_php");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("update Articulos set 
                           Descripcion='$_REQUEST[descripcion]',
                           Precio=$_REQUEST[precio],
                           IDRubro=$_REQUEST[idrubro]
              where IDArticulo=$_REQUEST[id]") or
      die($mysql->error);
     
    echo 'Se modificaron los datos del artículo';
    
    $mysql->close();

  ?> 
</body>
</html>