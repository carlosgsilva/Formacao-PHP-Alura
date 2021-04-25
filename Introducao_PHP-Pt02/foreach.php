<?php
$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Carlos',
    'saldo' => 1000
  ],
  '455.835.789-62' => [
    'titular' => 'Vinicius',
    'saldo' => 1500
  ],  
  '956.835.789-62' => [
    'titular' => 'Maria',
    'saldo' => 800
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf, " ", $conta['titular'] . PHP_EOL;
}