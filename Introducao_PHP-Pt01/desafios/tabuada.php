<?php 

$multiplicador = 5;

for ($i = 0; $i <= 10; $i++) {
  $resultado = $multiplicador * $i;
  echo "$multiplicador x $i = $resultado" . PHP_EOL;
}