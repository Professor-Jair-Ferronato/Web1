<?php

// Importando as classes necessárias
require_once 'ContaBancaria.php';
require_once 'ContaCorrente.php';

echo "--- Testando Conta Bancária Comum ---<BR>";
// Instanciando uma conta bancária padrão
$contaComum = new ContaBancaria("Carlos Silva", 1000.00, "12345-6");

echo "Titular: " . $contaComum->getTitular() . "<BR>";
echo "Saldo Inicial: R$ " . $contaComum->getSaldo() . "<BR>";

// Testando depósito e saque na conta comum
$contaComum->depositar(500.00);
echo "Saldo após depósito de R$ 500: R$ " . $contaComum->getSaldo() . "<BR>";

$contaComum->sacar(300.00);
echo "Saldo após saque de R$ 300: R$ " . $contaComum->getSaldo() . "<BR>";

$contaComum->sacar(1500.00); // Deve dar erro de saldo insuficiente


echo "<BR>--- Testando Conta Corrente (Com Cheque Especial) ---<BR>";
// Instanciando uma conta corrente com limite de R$ 500,00 de cheque especial
$contaEspecial = new ContaCorrente("Mariana Souza", 200.00, "54321-0", 500.00);

echo "Titular: " . $contaEspecial->getTitular() . "<BR>";
echo "Saldo Inicial: R$ " . $contaEspecial->getSaldo() . "<BR>";

// Testando a lógica de saque sobrescrita na ContaCorrente
// Cenário 1: Sacar dentro do saldo real
$contaEspecial->sacar(150.00); 

// Cenário 2: Sacar usando o limite do cheque especial (Saldo de R$ 50 restante + R$ 500 de limite = R$ 550 disponíveis)
$contaEspecial->sacar(400.00); 

// Cenário 3: Tentar sacar além do limite do cheque especial
$contaEspecial->sacar(300.00);