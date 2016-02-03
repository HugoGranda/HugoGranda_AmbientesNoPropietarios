<?php  

	$result="";
	if ($_POST) {
		$email=$_POST['email'];
		$contrasenia=$_POST['contrasenia'];

		$enlace = mysql_connect("localhost", "root", "");
 		mysql_select_db("examen2", $enlace);

 		$q_select= "SELECT * from estudiante where email='$email' and contrasena='$contrasenia'";
  		$resultado = mysql_query($q_select, $enlace);

  		$filas = mysql_num_rows($resultado);
		if($filas>0){
			echo "false";
		}
		else{
			echo "true";
		}
	}
	else{
		echo "No se han recibido datos";
	}  
	
?>