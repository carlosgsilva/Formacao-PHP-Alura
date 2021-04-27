<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
