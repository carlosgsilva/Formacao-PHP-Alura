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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contas Correntes</title>
</head>
<body>
  <h1>Contas Correntes</h1>

  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
    <dt>
      <h3><?=$conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dt>Saldo: <?= $conta['saldo']; ?> </dt>
    <?php } ?> 
  </dl>
</body>
</html>