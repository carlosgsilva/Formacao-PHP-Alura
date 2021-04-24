<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou a parti de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar";
} else if ($idade >= 16  and $numeroDePessoas >=2) {
    echo "Você tem $idade anos e está acompanhado. Pode entrar";
} else {
    echo "Você tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";