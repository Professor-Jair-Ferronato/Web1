<?php
//require_once 'ContaBancaria.php';

class ContaCorrente extends ContaBancaria
{
    private float $limiteChequeEspecial;

    public function __construct(string $titular, float $saldo, string $numeroConta, float $limite)
    {
        parent::__construct($titular, $saldo, $numeroConta);
        $this->limiteChequeEspecial = $limite;
    }

    // Sobrescrita do método sacar para incluir o cheque especial
    public function sacar(float $valor): void
    {
        $saldoDisponivel = $this->getSaldo() + $this->limiteChequeEspecial;

        if ($valor <= $saldoDisponivel) {
            // Agora o saldo é alterado de verdade! Ele pode inclusive ficar negativo.
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<BR>";

            // Avisa o cliente se ele entrou no cheque especial
            if ($this->saldo < 0) {
                echo "Atenção: Você está utilizando R$ " . number_format(abs($this->saldo), 2, ',', '.') . " do seu limite de cheque especial.<BR>";
            }
        } else {
            echo "Erro: Limite de cheque especial excedido. Saque de R$ " . number_format($valor, 2, ',', '.') . " recusado.<BR>";
        }
    }

    // Getter opcional para o limite, caso queira exibir no UsarConta.php
    public function getLimiteChequeEspecial(): float
    {
        return $this->limiteChequeEspecial;
    }
}
