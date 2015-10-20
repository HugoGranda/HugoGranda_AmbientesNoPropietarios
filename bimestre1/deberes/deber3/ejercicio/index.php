<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}
body{
background-color: grey;
}

table, th, td{
  border: 1px solid #000000;
  border-collapse: collapse;
  margin: auto;
}

th{
  background-color: #0F41CB;
  color:FFFFFF;
}

table tr:nth-child(even){
  background-color: #15efe8; 
}

table tr:nth-child(odd){
  background-color: #dddddd; 
}
label{
  font-weight: bold;
  width: 100px;
}
input{
  margin-bottom: 10px;
}
';/**/
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es generada por un while y un for de PHP. Las caracteristicas que debe tener esta 
          tabla se muestran en la siguiente lista ordenada (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla esta centrada en la pantalla utilizando CSS.</li>';
echo '<li>La cabecera tiene un fondo de color azul oscuro con letra blanca.</li>';
echo '<li>Las filas pares son celestes y las filas impares son grises.</li>';
echo '<li>Los números en las celdas estan alineados a la derecha.</li>';
echo '<li>La tabla tiene un borde solido negro.</li>';
echo '</ol>';

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}

echo '</tbody>';

echo '</table>';

echo '<p>A continuacion tenemos un formulario HTML basico con las siguientes caracteristicas:</p>';
echo '<ul>';
  echo '<li>Las etiquetas estan enlazadas con sus respectivos campos.</li>';
  echo '<li>Las etiquetas tienen un ancho de 100px y estan en negrita..</li>';
  echo '<li>Los input tienen un margen inferior de 10px;</li>';
echo '</ul>';
echo '<label>Nombre:&nbsp&nbsp&nbsp&nbsp&nbsp</label>';
echo '<input id="nombre" name="nombre" type="text" /><p></p>';
echo '<label>Apellido:&nbsp&nbsp&nbsp&nbsp&nbsp</label>';
echo '<input id="apellido" name="apellido" type="text" /><p></p>';
echo '</table>';
echo '<button type="submit">Enviar</button>';
echo '</body>';
echo '</html>';