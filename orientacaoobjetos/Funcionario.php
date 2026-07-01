<?php

abstract class Funcionario
{
    public function __construct(
        protected string $nome,
        protected float $salarioBase
    ) {}

    abstract public function calcularSalario(): float;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }
}

class Gerente extends Funcionario
{
    public function calcularSalario(): float
    {
        return $this->salarioBase * 1.20;
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularSalario(): float
    {
        return $this->salarioBase;
    }
}

// Execução Polimórfica
$equipe = [
    new Gerente("Alice", 5000.00),
    new Desenvolvedor("Bruno", 3500.00)
];

foreach ($equipe as $f) {
    echo "Nome do funcionário: " . $f->getNome() . "<BR>";
    echo "Salário Base: R$ " . number_format($f->getSalarioBase(), 2, ",", ".") . "<BR>";
    echo "Salário Calculado: R$ " . number_format($f->calcularSalario(), 2, ",", ".") . "<BR><BR>";
}
