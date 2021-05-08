<?php

namespace Alura\Banco\Service\ControladorDeBonificacoes;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
  private float $totalBonificacoes = 0;

  public function adicionaBonificacoesDe(Funcionario $funcionario): void
  {
    $this->totalBonificacoes += $funcionario->calculcaBonificacao();
  }

  public function recuperaTotal(): float
  {
    return $this->totalBonificacoes;
  }
}