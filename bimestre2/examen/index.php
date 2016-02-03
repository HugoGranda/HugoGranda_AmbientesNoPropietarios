<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
	<body>
		<div class="container-fluid">
			
			
			<div class="row">
				<div class="col-md-9 col-md-offset-3">
					<label for="lblregistro" id="lblregistro">Inicio de sesión para matricularte</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form id="sesion">
				
					   	<div class="form-group">
							<label for="nombre">Nombre</label>
					        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre">
						</div>

					    <div class="form-group">
						    <label for="contraseña">Contraseña</label>
					        <input type="password" class="form-control" name="contrasenia" id="contrasenia" value="" placeholder="Contraseña">
					    </div>

					</form>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-4">
						<button type="button" class="btn btn-primary" id="btn-iniciar">Iniciar sesión</button>

					</div>
					<div class="col-md-1">
						<a href="registro.php">Registrame</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-5">
						<div id="mensaje"></div>		
					</div>
				</div>
			</div>
			
		</div>    


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		
	</body>
</html>