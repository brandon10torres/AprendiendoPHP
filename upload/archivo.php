<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
		echo "La foto se subio correctamente . <br>";
		$nom=$_FILES['foto']['name'];
		echo "<img src=\"$nom\">";
	?>
</body>
</html>