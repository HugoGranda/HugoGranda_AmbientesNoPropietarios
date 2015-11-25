<?php

	if($_POST){
		$email = $_POST['email'];
		$contrasena = md5($_POST['contrasena']);
		$verfcontrasena = md5($_POST['verfcontrasena']);

		if($contrasena !== $contrasena2){
			echo htmlentities('Las contraseñas no coinciden');
		}
		else{

			$conn = new mysqli('localhost' , 'root' , '', 'examen');
		  	if ($conn->connect_error) die($conn ->connect_error);
		  
			$conn2 = mysql_connect("localhost","root","");
			mysql_select_db("usuarios",$conn2);
		   
		   	$consulta= mysql_query("SELECT * from usuarios where email='$email'",$conn2) ;
		  
		   	$fila=mysql_num_rows ($consulta);

		  	if ($fila==0){
		  	
		    	$query = "INSERT INTO usuarios
		        	          (email, 
			                    contrasena, 
			                    verfcontrasena
			                    )
			                VALUES (
			                  '$email',
			                  '$contrasena',
			                  '$verfcontrasena'
			                  )";
		  		$result = $conn ->query($query);
		  		if (!$result) {
		        
			        echo htmlentities('Usuario Ingresado Correctamente');

				}
		  	
			}
		  	else{
				echo htmlentities('Ya existe el email intente con otro');
			}
		}
	}
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
			<label id="registro">Registro de usuarios</label><br><br><br><br><hr>
			
			<label id="email">E-mail</label>
			<input type ="text" name="email" placeholder="Email"><br><br><br><br>
			
			<label>Contraseña</label>
			<input type ="text" name="contrasena" placeholder="Contraseña"><br><br><br><br>

			<label>Verificar Contraseña</label>
			<input type ="text" name="verfcontrasena" placeholder="Verificar Contraseña">
			
			<button  id="btnregistrar" name="registrar">Registrame</button>
			
		</div>
	</form>
</body>
</html>