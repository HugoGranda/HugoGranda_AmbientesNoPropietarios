<?php  

if ($_POST) {
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$email_2 = $_POST['email_2'];
	$contrasena = md5($_POST['contrasena']);
	$contrasena_2 = md5($_POST['contrasena_2']);
	$sexo = $_POST['sexo'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$anio = $_POST['anio'];
	if ($contrasena !== $contrasena_2) {
		echo htmlentities('Las contraseñas que ingreso no coinciden');
	}

	else{
		$conn = new mysqli('localhost','root',,'sistema');

		if ($conn ->connect_error) die ($conn->connect_error);
			
			$conn2 = mysql_connect("localhost","root", "");
			mysql_select_db("sistema",$conn2);
			$requerir= mysql_query("SELECT * FROM usuarios where email='$email'", $conn2);
			$fila = mysql_num_rows($requerir);

			if($fila==0){
				$query ="INSERT INTO usuarios
							(Nombre,
								Apellidos,
								Email,
								Email_2,
								Contrasena,
								Contrasena_2,
								Sexo,
								Dia,
								Mes,
								Anio)
						VALUES(
							'$nombre',
							'$apellidos',
							'$email',
							'$email_2',
							'$contrasena',
							'$contrasena_2',
							'$sexo',
							'$dia',
							'$mes',
							'$anio')";
				$result = $conn -> query($query);

				if (!$result) {
						echo htmlentities('USUARIO INGRESADO CORRECTAMENTE');
				}
			}

			else{
				echo htmlentities('OTRO USUARIO YA TIENE ESE EMAIL');
			}
		}
	}
?>