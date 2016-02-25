<?php  
	$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
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
			<div class="row">
				<div class="col-md-6 col-md-offset-4">
					<label for="titulo" id="titulo">Registro de materias</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-3 col-md-offset-4">
					<button class="btn btn-primary" id="guardar">Guardar</button>
				</div>				
				<div class="col-md-2">
					<button class="btn btn-primary" id="cancelar">Cancelar</button>
				</div>
			</div>	
			<div class="row" id="listas">
				<div class="col-md-2" >
					<form>
						<div class="form-group">
							<label for="nivel">Nivel</label>
							<select class="form-control" id="nivel" name="nivel">
								<option>Seleccione un nivel...</option>
								<?php  
									foreach($niveles as $nivel){
		    						echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
		  							}
								?>
							</select>
						</div>
					</form>	
				</div>
				<div class="col-md-5 form-group">
					<label>Materias asignadas al Nivel</label>
					<div class="form-control" id="materias-asignadas">
						
					</div>
				</div>
				<div class="col-md-5 form-group">
					<label>Lista de todas las materias</label>
					<div class="bg-info" id="materias">
												
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
