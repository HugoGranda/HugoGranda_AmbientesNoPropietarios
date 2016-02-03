<?php  
	$result="";
	if ($_POST) {
		$valor=$_POST['buscar'];

		$conn= new mysqli('localhost','root','','registro');
		if($conn->connect_error){
			$result="No se puede establecer conexion con la base de datos";
		}
		
		else{
			$query="SELECT * FROM usuario where nombre like '%".$valor."%'";
			$res=$conn->query($query);

			if (!$result) die($conn ->error);
			$rows = $result ->num_rows;

			$encontrar = array();
			$tabla="";
			for ($j = 0 ; $j < $rows ; ++$j){

		        $result ->data_seek($j);
		    
				$tabla .="<tr>";
		        $encontrar[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  			

	  			foreach ($encontrar as $reg) {
	  				$tabla.='<td>'.$reg.'</td>';
	  			}
	  			$tabla .="</tr>";
  			}		

  			$result->close();
  			$conn->close();

		}

	}
	else{
		echo 'No se ha recibido ningun dato';
	}
?>