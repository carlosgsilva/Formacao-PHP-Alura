<?php

function sacar ($conta, $valor) {
  if ($conta['saldo'] < $valor) {
    exibirMensagem(mesagem: 'Você não pode sacar esse valor. Saldo insulficiente!');
  } else {
    $conta['saldo'] -= $valor;
  }
  
  return $conta;
}

function depositar ($conta, float $valor) {
  if ($valor > 0) {
    $conta['saldo'] += $valor;
  } else {
    exibirMensagem(mesagem: 'Saques devem ser com valor positivo');
  }

  return $conta;
}

function exibirMensagem ($mesagem) {
  echo $mesagem . PHP_EOL;
}

function titularComLetraMaiuscula (array &$conta) {
  $conta['titular'] = strtoupper($conta['titular']);
}