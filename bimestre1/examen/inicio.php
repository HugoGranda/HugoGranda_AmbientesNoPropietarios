<?php
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<form action='' method='POST'>
		<div id="form">
			<label id="registro">Registro de clientes</label><br><br><br><br><hr>
			
			<label id="nombre">Nombre</label>
			<input type ="text" name="nombre" placeholder="nombre"><br><br>
			
			<label id="apellido">Apellido</label>
			<input type ="text" name="apellido" placeholder="apellido"><br><br>

			<label id="edad">Edad</label>
			<select name="edad">
				<option value="1">Menor de 20</option>
				<option value="2">Entre 20 y 39</option>
				<option value="3">Entre 40 y 59</option>
				<option value="4">Mas de 60</option>
			</select><br><br>

			<label id="peso">Peso</label>
			<input type ="text" name="peso" placeholder="peso">		<br><br>

			<label id="genero">Genero: </label>
			<label for="genero_m">Masculino </label>
	    	<input type="radio" id="genero_m" name="genero" value="m">
	    	<label for="genero_f">Femenino </label>
	    	<input type="radio" id="genero_f" name="genero" value="f" checked="ckecked"><br><br>

	    	<label id="estado">Estado Civil: </label>
			
			<label for="estado_s">Soltero</label>
	    	<input type="radio" id="estado_s" name="estado" value="s">

	    	<label for="estado_c">Casado </label>
	    	<input type="radio" id="estado_c" name="estado" value="f" checked="ckecked">

	    	<label for="estado_o">Otros</label>
	    	<input type="radio" id="estado_o" name="estado" value="o"><br><br>
				
			<button  id="btnregistrar" name="registrar">Registrar</button>
			
		</div>
	</form>
</body>
</html>