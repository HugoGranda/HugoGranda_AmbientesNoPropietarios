<?php
	echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Registro</title>';
		echo '<style>';
			echo 'body{     
				background-color: #DCE7FF;
				color :#0E385F;
				text-align:center;
			}
			
			#btnregistrar{
				background-color:#669E51;
				color:white;
				width:150;
				height:35;
			}

			#registrar{
				text-align:left;
				color :#0E385F;
				font-size:20px;
			}

			#deber{
				color :#3B59AE;
				font-size:13px;
			}

			
			#formulario { 
				width: 500px;
				height: 500px;
				position: absolute;
  				top: 10%;
  				left:25%;
			}';
		echo '</style>';


	echo '</head>';
	echo '<body>';
		echo '<div id="formulario">';
		echo '<h3 id="registrar">Regístrate</h3>';
		echo '<h1 id="registrar">Es gratis (y lo seguirá siendo). </h1><br>';
		echo '<table>';
			echo '<tr>';
			echo '<td>';
				echo '<label>Nombre:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input id="nombre" name="nombre" type="text" placeholder="Nombre" /><br>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
				echo '<label>Apellidos:</label>';
			echo '</td>';
			echo '<td>';
				echo '<input id="apellidos" name="apellidos" type="text" placeholder="Apellido" /><br>';
			echo '</td>';
			echo '</tr>';

			echo '<tr>';
				echo '<td>';
				echo '<label>Tu email:</label>';
				echo '</td>';
				echo '<td>';
				echo '<input id="email" name="email" type="text" placeholder="Correo Electronico o celular" /><br>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
				echo '<label>Escribe de nuevo el correo electronico:</label>';
				echo '</td>';
				echo '<td>';
				echo '<input id="emailagain" name="emailagain" type="text" placeholder="Confirmar Correo Electronico o celular" /><br>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
				echo '<label>Contraseña nueva:</label>';
				echo '</td>';
				echo '<td>';
				echo '<input id="newpass" name="newpass" type="text" placeholder="Nueva contraseña"/><br>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
				echo '<label>Sexo:</label>';
				echo '</td>';
				echo '<td>';
				echo '<select name="sexo">';
				echo '<option value="">Seleccionar el Sexo</option>';
				echo '<option value="masculino">Masculino</option>';
				echo '<option value="femenino">Femenino</option>';
				echo '</td>';
				echo '</select><br>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
				echo '<label>Fecha de nacimiento:</label>';
			echo '</td>';
			echo '<td>';
				echo '<select name=dia>';
				echo '<option value="">Dia</option>';
				echo '<option>1</option>';
				echo '<option>2</option>';
				echo '<option>3</option>';
				echo '<option>4</option>';
				echo '<option>5</option>';
				echo '<option>6</option>';
				echo '<option>7</option>';
				echo '<option>8</option>';
				echo '<option>9</option>';
				echo '<option>10</option>';
				echo '<option>11</option>';
				echo '<option>12</option>';
				echo '<option>13</option>';
				echo '<option>14</option>';
				echo '<option>15</option>';
				echo '<option>16</option>';
				echo '<option>17</option>';
				echo '<option>18</option>';
				echo '<option>19</option>';
				echo '<option>20</option>';
				echo '<option>21</option>';
				echo '<option>22</option>';
				echo '<option>23</option>';
				echo '<option>24</option>';
				echo '<option>25</option>';
				echo '<option>26</option>';
				echo '<option>27</option>';
				echo '<option>28</option>';
				echo '<option>29</option>';
				echo '<option>30</option>';
				echo '<option>31</option>';
				echo '</select>';

				echo '<select id="mes">';
				echo '<option value="">Mes</option>';
				echo '<option>Enero</option>';
				echo '<option>Febrero</option>';
				echo '<option>Marzo</option>';
				echo '<option>Abril</option>';
				echo '<option>Mayo</option>';
				echo '<option>Junio</option>';
				echo '<option>Julio</option>';
				echo '<option>Agosto</option>';
				echo '<option>Septiembre</option>';
				echo '<option>Octubre</option>';
				echo '<option>Noviembre</option>';
				echo '<option>Diciembre</option>';
				echo '</select>';
				echo ' <select id="año">';
				echo '<option value="">Año</option>';
				echo '<option>1994</option>';
				echo '<option>1995</option>';
				echo '<option>1996</option>';
				echo '<option>1997</option>';
				echo '<option>1998</option>';
				echo '<option>1999</option>';
				echo '<option>2000</option>';
				echo '<option>2001</option>';
				echo '<option>2002</option>';
				echo '<option>2003</option>';
				echo '<option>2004</option>';
				echo '<option>2005</option>';
				echo '<option>2006</option>';
				echo '<option>2007</option>';
				echo '<option>2008</option>';
				echo '<option>2009</option>';
				echo '<option>2010</option>';
				echo '<option>2011</option>';
				echo '<option>2012</option>';
				echo '<option>2013</option>';
				echo '<option>2014</option>';
				echo '<option>2015</option>';
			echo '</select>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';
		echo '<a href="pagina_deber.php" id="deber" >¿Por que debo proporcionar esta informacion?</a><br>';
		echo '<br>';
		echo '<input type="button" value="Registrate" id="btnregistrar"> ';
		echo'</div>';
	echo '</body>';
	echo '</html>';
?>
