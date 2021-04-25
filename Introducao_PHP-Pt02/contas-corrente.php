<?php

$conta1 = ['titular' => 'Carlos', 'saldo' => 1000];
$conta2 = ['titular' => 'Vinicius', 'saldo' => 1500];
$conta3 = ['titular' => 'Maria', 'saldo' => 800];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}