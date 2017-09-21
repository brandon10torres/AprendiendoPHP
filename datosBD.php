<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="row">
	<h1>Alta de alumnos</h1>
	<form action="BD.php" method="post">
		Ingrese nombre:
		<input type="text" name="nombre">
		<br>
	Ingrese email:
	<input type="text" name="email">
	<br>
	Seleccione el curso:
	<select name="CodigoCurso">
		<option value="1">PHP</option>
		<option value="2">ASP</option>
		<option value="3">JSP</option>		
	</select>
	<br>
	</div>
	<input type="submit" value="Registrar">
	</form>

	<h1>Buscar alumno</h1>
	<form action="buscarBD.php" method="post">
	Ingrese el nombre del alumno:
	<input type="text" name="nombus">
	<br>
	<input type="submit" value="Buscar">
	</form>

	<h1>Eliminar alumno</h1>
	<form action="eliminarBD.php" method="post">
	Ingrese el nombre del alumno:
	<input type="text" name="nomeli">
	<br>
	<input type="submit" value="Eliminar">
	</form>

	</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</html>