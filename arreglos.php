<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nombres[]="Brandon";
		$nombres[]="Ulises";
		$nombres[]="González";
		$nombres[]="Torres";
		$edades = array("18", "20");
		for ($i=0; $i<count($nombres); $i++)
		{
			echo $nombres[$i];
			echo "<br>";
		}
		for ($f=0; $f<count($edades); $f++)
		{
			echo $edades[$f];
			echo "<br>";
		}
	?>
</body>
</html>