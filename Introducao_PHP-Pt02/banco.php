<?php

require_once 'funcoes.php';

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

$contasCorrentes['956.835.789-62'] = sacar($contasCorrentes['956.835.789-62'], 200);

$contasCorrentes['455.835.789-62'] = sacar($contasCorrentes['455.835.789-62'], 500);

$contasCorrentes['455.835.789-62'] = depositar($contasCorrentes['455.835.789-62'], 200);

titularComLetraMaiuscula(conta: $contasCorrentes['123.456.789-10']);

unset($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibirMensagem(mesagem: "$cpf {$conta['titular']} {$conta['saldo']}");
}