<?php

class ContaBancaria
{
    public function __construct(
        private string $titular,
        protected float $saldo,
        private string $numeroConta
    ) {}

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar(float $valor): void
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Erro: Saldo insuficiente.\n";
        }
    }
}
