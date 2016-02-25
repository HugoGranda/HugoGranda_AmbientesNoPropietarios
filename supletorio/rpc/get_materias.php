<?php  
    
	$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
	if ($conn->connect_error) die($conn ->connect_error);

    $query = "SELECT * FROM materia ";
      
    $result = $conn ->query($query);
	      
    if (!$result) die($conn ->error);

    $rows = $result ->num_rows;
      
    $materias = array();
	for ($j = 0 ; $j < $rows ; ++$j){
	   	$result ->data_seek($j);
	   	$materias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  	}
  	$checkbox = "";
  	foreach ($materias as $materia) {
		$checkbox .= '<input type="checkbox" name="'.$materia['nombre'].'"value="' . $materia['id_materia'] . '">' . $materia["nombre"] . '</option><br>';
	}
  	echo $checkbox;
	$result ->close();
	$conn ->close();

?>