<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
	<title>Contactos</title>
</head>
<body>

	<div class="container">
		<header>
			<h1>Crear Contacto</h1>
		</header>
	</div>


	<form class="container" action="../../controladores/Contactos.php" method="post">
		<div class="form-group">
			<input class="form-control" name="telefono"  type="text" minlength="8" maxlength="15" placeholder="Numero de telefono" required autofocus />
		</div>
		<div class="form-group">
			<input class="form-control" name="nombre"  type="text" placeholder="Nombre" required autofocus />
		</div>
		<div class="form-group">
			<select class="form-control" name="tipo" id="" required>
				<option value="1">Personal</option>
				<option value="2">Referencia Laboral</option>
				<option value="3">Referencia familiar</option>
			</select>
		</div>
		<div class="form-group">
			<input class="form-control" name="observaciones" type="text" placeholder="Observaciones" autofocus />
		</div>
		<div class="form-group">
			<div class="col-md-12 text-center">
				<input name="accion" type="submit" class="btn btn-light" value="Insertar"/>
				<a href="index.php" class="btn btn-dark">Regresar</a>
			</div>
		</div>
	</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>