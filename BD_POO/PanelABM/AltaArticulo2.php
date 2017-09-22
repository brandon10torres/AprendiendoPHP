<?php
    $mysql=new mysqli("localhost","root","root","BD_php");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("insert into Articulos(Descripcion, Precio, IDRubro) 
        values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[idrubro])") or
      die($mysql->error);
      
    $mysql->close();

    header('Location:index.php');    
?>  