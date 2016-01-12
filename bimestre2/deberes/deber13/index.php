<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
</head>
	<body>
		<div id="success" class="has-success"></div>
		<div id="error" class="has-error"></div>
		
		<div class="row">
		<div class="col-md-5 col-md-offset-1">
			<form id="usuarios">
		    	<div class="form-group">
		    		<label for="nombre">Nombre</label>
			        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre">
			    </div>

				<div class="form-group">
				    <label for="email">Email</label>
			        <input type="text" class="form-control" name="email" id="email" value="" placeholder="Email">
		        </div>

		        <div class="form-group">
				    <label for="telefono">Telefono</label>
			        <input type="text" class="form-control" name="telefono" id="telefono" value="" placeholder="Telefono">
		        </div>

		        <div class="form-group">
				    <label for="direccion">Direccion</label>
			        <input type="text" class="form-control" name="direccion" id="direccion" value="" placeholder="Direccion">
		        </div>

		        <div class="form-group">
				    <label for="usuario">Usuario</label>
			        <input type="text" class="form-control" name="usuario" id="usuario" value="" placeholder="Usuario">
		        </div>

		        <div class="form-group">
				    <label for="contrasena">Contraseña</label>
			        <input type="text" class="form-control" name="contrasena" id="contrasena" value="" placeholder="Contraseña">
		        </div>

		        <div class="form-group">
				    <label for="conf-contrasena">Confirmar contraseña</label>
			        <input type="text" class="form-control" name="conf_contrasena" id="conf_contrasena" value="" placeholder="Confirmar contraseña">
		        </div>
		   	</form>
	   	</div>
	   	</div>
	   	<button type="button" class="btn btn-primary" id="btn-enviar">Enviar</button>
		      


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		
	</body>
</html>