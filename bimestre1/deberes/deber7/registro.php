<?php
require('c_index.php');

echo "<html>";
echo '<head>';
echo "<title></title>";
echo '<meta charset="utf-8">';
echo '<style>';

echo 'body{     
	text-align:center;
}

#btnRegistrar{
	
	background-color:#669E51;
	color:white;
	width:150;
	height:35;
}
#deber{
	color :#3B59AE;
	font-size:13px;

}

#registrar{
	
	text-align:left;
	color :#0E385F;
	font-size:20px;
}

label{
	color :#0E385F;
	font-size:16px;
}
input
{
	border-style: double;
	width:250;
	height:30;
}



.selectSexo{

  width: 140px;
  position:relative;
}

#formulario { 
	background-color: #DCE7FF;
	width: 600px;
	height: 400px;
	position: absolute;
  	top: 25%;
  	left: 30%;
}';

echo '</style>';
echo '</head>';
echo '<body>';
echo '<div id ="formulario">';

echo "<p id ='registrar'><b>Registrate</b></p>";
echo "<p id = 'registrar'> Es gratis(y lo seguira siendo).</p>";
echo "<form action='' method='POST'>";
		echo '<table>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Nombre:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="text" id="nombre" value="" name="nombre" placeholder="Nombre">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Apellidos:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="text" id="apellidos" value="" name="apellidos" placeholder="Apellido">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Tu email:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="email" id="tuemail" value="" name="email" placeholder="Correo Electronico o celular">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Escribe de nuevo el correo electronico:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="email" id="email" value="" name="email2" placeholder="Correo Electronico o celular">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Contraseña nueva:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="password" id="contrasena" value="" name="contrasena" placeholder="Nueva contraseña">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Confirmar contraseña</label>';
			echo '</td>';
			echo '<td>';
				echo '<input type="password" id="confcontrasena" value="" name="contrasena2" placeholder="Confirmar nueva contraseña">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Sexo:</label>';
			echo '</td>';
			echo '<td>';
				echo'<select name="sexo"><br>
					<option>Selecciona el sexo</option>
					<option value="f" name="sexo">Femenino</option>
					<option value="m" name="sexo">Masculino</option>
				</select>';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>';
				echo '<label>Fecha de nacimiento:</label>';
			echo '</td>';
			echo '<td>';
				echo '<select name="dia">';
					echo '<option value="">Dia</option>';
					for($i=1 ;$i<=31;$i++)
					{
						echo "<option value='$i'>$i</option>";
					}
				echo '</select>';
				
				echo '<select name="mes">
					<option value="">Mes</option>
					<option value="1">Enero</option>
					<option value="2">Febrero</option>
					<option value="3">Marzo</option>
					<option value="4">Abril</option>
					<option value="5">Mayo</option>
					<option value="6">Junio</option>
					<option value="7">Julio</option>
					<option value="8">Agosto</option>
					<option value="9">Septiembre</option>
					<option value="10">Octubre</option>
					<option value="11">Noviembre</option>
					<option value="12">Diciembre</option>
				</select>';
				
				echo ' <select name="anio">';
				echo '<option value="">Año</option>';
					for($i=1905;$i<=2015;$i++)
					{
					echo "<option value='$i'>$i</option>";
					}
				echo '</select>';

			echo '</td>';
		echo '</tr>';
	echo '<table>';

	echo '<a href="index.php" id="deber" >¿Por que debo proporcionar esta informacion?</a> <br>';
	echo '<br>';
	echo '<button  id="btnRegistrar" name="registrar"> Registrate</button>';
echo '</form>';

echo '</div>';
echo '</body>';

echo "</html>";

?>

