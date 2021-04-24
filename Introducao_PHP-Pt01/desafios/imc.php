<?php

$peso = 60;
$altura = 1.74;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Você está";

if ($imc < 18 ) {
  echo (" abaixo do recomendado.");
} else if ($imc <= 25) {
  echo (" está dentro do recomendado.");
} else {
  echo (" acima do recomendado.");
} 