<?php  
	$conn = new mysqli('localhost' , 'root' , '', 'examen2');
	if ($conn->connect_error) die($conn ->connect_error);
	$query = "SELECT * FROM nivel";
	$result = $conn ->query($query);
	
	if (!$result) die($conn ->error);

	$rows = $result ->num_rows;
	$niveles = array();
	for ($j = 0 ; $j < $rows ; ++$j){
		$result ->data_seek($j);
		$niveles[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
	}

	session_start();
	if (isset($_SESSION['matriculado'])) {
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
	<body>
		<div class="container-fluid">
			<div id="mensaje"></div>
			
			<div class="row">
				<div class="col-md-9 col-md-offset-2">
					<label for="lblregistro" id="lblregistro">Bienvenido, en esta pantalla puedes matricularte</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form id="matriculacion">
				
					   	<div class="form-group">
							<label for="nombre">Seleccione el nivel:</label>
					        <select id="nivel" name="nivel">
					        	<option value="">Seleccione..</option>
					        	<?php 
					        		foreach ($niveles as $nivel) {
					        			echo '<option value="'.$nivel['id_nivel'].'">'.$nivel['nombre'].'</option>';
					        		}
					        	?>
					        </select>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div id="materias">
									</div>
								</div>
							</div>
						</div>

					</form>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-5">
						<button type="button" class="btn btn-primary" id="btn-reg-matricula">Registrar Matricula</button>

					</div>
				</div>
			</div>
			
		</div>    


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		
	</body>
</html>
<?php  
}
else{
	header("Location: index.php");
}
?>