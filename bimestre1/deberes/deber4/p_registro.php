<?php
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	

	if ($_POST) {
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$contrasena = md5($_POST['contrasena']);
		$verificar_contrasena = md5($_POST['verificar_contrasena']);
		$genero = $_POST['genero'];
		$fecha = $_POST['fecha'];

		if ($contrasena !== $verificar_contrasena) {
			echo htmlentities("Las contraseñas no coincide");
		}

		$conn = new mysqli('localhost','root','','sistema');
		if($conn->connect_error)die($conn ->connect_error);

		$query = "INSERT INTO usuarios
							(nombre,
								apellidos,
								email,
								contrasena,
								genero,
								fecha)
						VALUES(
							'$nombre',
							'$apellidos',
							'$email',
							'$contrasena',
							'$genero',
							'$fecha')";
		$result =$conn -> query($query);
		if(!$result)die($conn ->error);
	}
?>