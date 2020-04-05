<?php

//indexados
$colores = array('Rojo', 'Verde', 'Azul');
// print_r($colores);
// for ($i=0; $i < sizeof($colores); $i++) {
//   echo "Indice: $i Valor:{$colores[$i]} \n";
// }
//asosiativos
$datos = array('nombre' => 'Leandro', 'edad' => 18);
// print_r($datos);
// foreach ($datos as $key => $value) {
//   echo "$key:$value \n";
// }
//multidimensional
$personas = array(
  '14030162' => array('nombre' => 'Leandro', 'edad' => 23 ),
  '14030213' => array('nombre' => 'Itzel', 'edad' => 23 ),
 );
 foreach ($personas as $key => $value) {
   foreach ($value as $key1 => $value1) {
     echo "$key: $key1 => $value1 \n";
   }
 }

 ?>
