<?php  
session_start();
	$result="";
	if ($_POST) {
		if (isset($$_POST['login'])) {
				
			$email=$_POST['email'];
			$contrasenia=$_POST['contrasenia'];

			$enlace = mysql_connect("localhost", "root", "");
	 		mysql_select_db("examen2", $enlace);

	 		$q_select= "SELECT * from estudiante where email='$email' and contrasena='$contrasenia'";
	  		$resultado = mysql_query($q_select, $enlace);
	  		
	  		$filas = mysql_num_rows($resultado);
			if($filas>0){
				$row=mysql_fetch_array($resultado);
				$_SESSION["matriculado"]=$row['matriculado'];
				echo 'Iniciado sesion para'.$_SESSION['matriculado'].'';
				echo '<script>window.location="../matriculacion.php";</script>';
			}
			else{
				echo '<script>alert("usuario o contraseña incorrectos.");</script>';
			}	echo '<script>window.location="../index.php";</script>';
		}
	}
	else{
		echo "No se han recibido datos";
	}  
	
?>