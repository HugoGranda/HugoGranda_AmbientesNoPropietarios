<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="POST" action="index.php">
		<div id="groupbox">
			<fieldset>
				<legend>Conversor de monedas</legend>
				<label id="USD">Valor en USD: </label>
				<input type="text" id="usd" name="usd">
				<label id="convertir">Convertir a: </label>
				<select id="seleccionar" name="seleccionar">
					<option value="0">Seleccione..</option>
					<option value="1">Euros</option>
					<option value="2">Pesos Colombianos</option>
				</select><br><br><br><br><br>
				<button id="convertir" name="convertir">Convertir</button>
				<br><br><br><hr>
				<label>Resultado</label>
				<?php 
				if (isset($_POST['convertir'])) {
					
				
					if ($_POST) {
						$dinero=$_POST['usd'];
						$opcion=$_POST['seleccionar'];
						if ($opcion==1) {
								$euros=$dinero*0.93;
								echo $dinero.'USD equivale a: '.$euros;
							}
						elseif ($opcion==2) {
								$pesos=$dinero*2870.67;
								echo $dinero.'USD equivale a: '.$pesos;
							}	
					}
				}
				?>

			</fieldset>		
		</div>
	</form>
</body>
</html>