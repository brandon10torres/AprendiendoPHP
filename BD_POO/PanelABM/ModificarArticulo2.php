<?php
    $mysql=new mysqli("localhost","root","root","BD_php");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("update Articulos set 
                           Descripcion='$_REQUEST[descripcion]',
                           Precio=$_REQUEST[precio],
                           IDRubro=$_REQUEST[idrubro]
              where IDArticulo=$_REQUEST[id]") or
      die($mysql->error());
     
    $mysql->close();

    header('Location:index.php');
?>  