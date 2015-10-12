<!DOCTYPE html>
<?php
	function generar_tabla(){
		echo "<table id='tabla'>" ;
		echo "<caption>NUMEROS PRIMOS</caption>";
		$i = 0 ;
		while ( $i < 100 ) {
			echo "<tr>" ;
			for ( $j = 0 ; $j < 10 ; $j++ ) { 
				$es_primo = es_primo( $i );
				echo '<td' . ($es_primo ? ' class="primo"' : '') . '>';
				echo $i++ ;
				echo "</td>" ;
			}
			echo "</tr>" ;
		}
		echo "</table>" ;
	}
	function es_primo($num){
		if($num < 2){
			return false;
		} 
		else{
			if($num == 2) {
				return true;
			} 
			else{
			$es_primo = true;
			for($i = 2; $i <= $num/2; $i ++){
				if($num % $i == 0){
					$es_primo = false;
					break;
				}
			}
		}
		
			return $es_primo;
		}
	}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
			<?php
					generar_tabla();
			?>
	</body>
</html>