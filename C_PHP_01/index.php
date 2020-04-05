<?php
echo <<<TITULO
  Curso profesional de PHP
TITULO;

$autor =<<<'DEV'
  Leandroo
DEV;
echo "$autor";

$age=17;
$isClient=true;
$result=$age>=18 or $isClient==true;
if($result)
 echo 'Bienvenido';
else
 echo 'No puedes pasar';
 ?>
