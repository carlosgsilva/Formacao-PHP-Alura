<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Manaus', 'Petrópolis', 'Minha rua', '123');
$outroEndereco = new Endereco('Rio', 'Centro', 'A Rua', '456');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
