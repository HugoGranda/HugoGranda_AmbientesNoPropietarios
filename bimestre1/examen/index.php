<?php  
	if($_POST){
		$email = $_POST['email'];
		$contrasena = $_POST['contrasena'];

		$conn = mysql_connect("localhost", "root", "");
		mysql_select_db("examen", $conn);

		$consulta = mysql_query("SELECT * FROM clientes where email ='$email'", $conn);
		if(($email=="")||($contrasena=="")){
			echo htmlentities('Ingrese su Email y/o Contraseña');
		}
		else{
			$filas_email = mysql_num_rows($consulta);
		    if($filas_email!=0){
		    	$usuario = mysql_fetch_assoc($consulta);
		        $cont= md5($contrasena);
		      	
		      	if($cont==$usuario['contrasena'])
		      	{
		      		$_SESSION['email'] = $email;
		        	$_SESSION['contrasena'] = $contrasena;
		      	}
		      	
		      	else{
		        	echo htmlentities('La contraseña ingresada es incorrecta');
		        }
		    }

		    else{
		    	echo htmlentities('Error de Email y/o Contraseña, Intente Nuevamente o Registrate');
		   	}
		}
	}

	if(isset( $_SESSION['email'])&&isset( $_SESSION['contrasena'])) {
		http_redirect('inicio.php');
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
			<label>E-mail</label>
			<input type ="text" name="email" placeholder="Email"><br><br><br><br>
			<label>Contraseña</label>
			<input type ="text" name="contrasena" placeholder="Contraseña">
			
			<button  id="btniniciar" name="iniciar"> Iniciar Sesión</button>
			<a href="registro.php" id="registro" >Registrarme</a>
		</div>
	</form>
</body>
</html>