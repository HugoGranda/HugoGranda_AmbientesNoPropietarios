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
					<label for="lblregistro" id="lblregistro">Registrate para poder matricularte</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form id="estudiante">
				
					   	<div class="form-group">
							<label for="nombre">Nombre</label>
					        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre">
						</div>

						<div class="form-group">
						    <label for="telefono">Apellido</label>
					        <input type="text" class="form-control" name="apellido" id="apellido" value="" placeholder="Apellido">
					    </div>

						<div class="form-group">
						    <label for="email">Email</label>
					        <input type="text" class="form-control" name="email" id="email" value="" placeholder="Email">
					    </div>

					    <div class="form-group">
						    <label for="contraseña">Contraseña</label>
					        <input type="password" class="form-control" name="contrasenia" id="contrasenia" value="" placeholder="Contraseña">
					    </div>

					    <div class="form-group">
						    <label for="verfcontraseña">Verificar Contraseña</label>
					        <input type="password" class="form-control" name="verfcontrasenia" id="verfcontrasenia" value="" placeholder="Verificar contraseña">
					    </div>
					</form>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-4">
						<a href="index.php" ><button type="button" class="btn btn-primary" id="btn-registrar">Registrate</button></a>

					</div>
					<div class="col-md-1">
						<a type="button" href="index.php" class="btn btn-primary"   id="btn-cancelar">Cancelar</a>
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