<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$provincia=$_POST['#txtprovincia'];
$canton=$_POST['#txtcanton'];
$parroquia=$_POST['#txtparroquia'];
$usuario=$_POST['usuario'];
$contrasenia=md5($_POST['contrasenia']);


$conn = new mysqli('localhost', 'root','', 'registro');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasenia)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}

echo json_encode( $result );
?>