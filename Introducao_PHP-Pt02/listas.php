<?php

$idadeLista = [18, 20, 30, 4, 25, 18, 31, 42];

list($idadeCarlos, $idadeVinicius, $idadeMaria) = $idadeLista;

$idadeLista[] = [20];

$umaIdade = $idadeLista[0];

echo $umaIdade;