<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario() * 2;
  }

  public function podeAtenticar (string $senha): bool
  {
    return $senha === '1234';
  }
}