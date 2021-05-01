<?php

require_once 'src/Conta.php';
require_once 'src/Endereco  .php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('Manaus', 'Cidade Nova', 'minha rua', '407');

$vinicius = new Titular(new CPF('123.456.789-10', $endereco), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10',  $endereco), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', 'D');
$outra = new Conta(new Titular(new CPF('123.654.789-01', $endereco), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
