<?php require ('provincias_cantones_parroquias.php') ?>

<html>
<head>
<meta charset="utf-8">
<title> Ejercicio2</title>
</head>
<body>

<form method="post">

<select id="provincia" name="provincia">

<option value="0" >Seleccione</option>
<option value="1" >Azuay</option>
<option value="2" >Bolivar</option>
<option value="3">CA&Ntilde;AR</option>
<option value="4">Carchi</option>

<option value="5">Cotopaxi</option>
<option value="6">Chimborazo</option>
<option value="7">El Oro</option>
<option value="8">Esmeraldas</option>
<option value="20">Galapagos</option>

<option value="9">Guayas</option>
<option value="10">Imbabura</option>
<option value="11">Loja</option>
<option value="12">Los Rios</option>

<option value="13">Manabi</option>
<option value="14">Morona Santiago</option>
<option value="15">Napo</option>
<option value="22">Orellana</option>

<option value="16">Pastaza</option>
<option value="17">Pichincha</option>
<option value="24">Santa Elena</option>
<option value="23">Santo Domingo de los Tsachilas</option>

<option value="21">Sucumbios</option>
<option value="18">Tungurahua</option>
<option value="19">Zamora Chinchipe</option>

</select>


<select  id="canton" name="canton">
<option value="">Seleccione...</option>
<?php 
if($_POST)
{
	$provincia=$_POST['provincia'];

  
foreach ($provincias_cantones_parroquias [$provincia] as $key => $value) {
  foreach ($value as $key => $variable) {
   foreach ($variable as $key => $value) {

   	 if (is_array($value))
   	 {

   	 }
   	 else
   	 {
   	 echo"<option value='$key'>$value</option>";
   	 }
   }
    
  }

}
}
?>
</select>


<select  id="parroquia" name="parroquia">
<option value="">Seleccione...</option>
<?php 

if($_POST)
{
$provincia=$_POST['provincia'];
$canton=$_POST['canton'];
	
 foreach ($provincias_cantones_parroquias as $key => $value) {
  foreach ($value as $key => $variable) {
   foreach ($variable as $key => $value) {

    foreach ($value as $key => $value2) {
    foreach ($value2 as $key => $value3) {
    		if (is_array($value3))
   	 {

   	 }
   	 else
   	 {
   	 echo"<option value='$key'>$value3</option>";
   	 }
    }
    }
   	 
   }
    
  }

}
}
?>


</select>






<button name="enviar">Enviar</button>

</form>


</body>

</html>