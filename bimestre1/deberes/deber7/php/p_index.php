<?php  
	
	if($_POST){

		$email = $_POST['email'];
		$contrasena = $_POST['contrasena'];

		$conn = mysql_connect("localhost", "root", "");
		mysql_select_db("sistema",$conn);

		$consulta=mysql_query("SELECT * FROM usuarios where email='$email'",$conn);

		if (($email=="")||($contrasena=="")) {
			echo htmlentities('INGRESE EMAIL O CONTRASEÑA');
		}

		else{
			$filas_e = mysql_num_rows($requerir);
				if($filas_e!= 0){

					$user = mysql_fetch_assoc($requerir);
					$contra= md5($contrasena);

					if ($contra== $usuario['contrasena']) {
						
						$_SESSION['email']= $email;
						$_SESSION['contrasena'] = $contrasena;
					}
					else{
						echo htmlentities('CONTRASEÑA INCORRECTA');
					}
				}
				else{
					echo htmlentities('EMAIL O CONTRASEÑA NO COINCIDEN');				
				}
		}
	}
	if (isset($_SESSION['email']) && isset($_SESSION['contrasena'])) {
		http_redirect('inicio.php');
	}
