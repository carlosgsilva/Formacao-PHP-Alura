<?php

class Conta
{
  private string $nomeTitular;
  private string $cpfTitular;
  private float $saldo = 0;

  public function sacar(float $valor) : void
  {
    if($valor > $this -> saldo){
      echo "Saldo indisponivel";
      return;
    }
    $this -> saldo -= $valor;
  }

  public function depositar(float $valor) : void
  {
    if($valor < 1) {
      echo "Valor precisa ser positivo";
      return;
    }
      $this -> saldo += $valor;
  }

  public function transferir(float $valor, Conta $conta) : void
  {
    if($valor > $this -> saldo){
      echo "Saldo insulficiente";
      return;
    }

    $this -> sacar($valor);
    $conta -> depositar($valor);
  }

  public function recuperaSaldo(): float
  {
      return $this->saldo;
  }

  public function defineCpfTitular(string $cpf): void
  {
    $this->cpfTitular = $cpf;
  }

  public function recuperaCpfTitular(): string
  {
    return $this->cpfTitular;
  }

  public function defineNomeTitular(string $nome): void
  {
    $this->nomeTitular = $nome;
  }

  public function recuperaNomeTitular(): string
  {
    return $this->nomeTitular;
  }

}