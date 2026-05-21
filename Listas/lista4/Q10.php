<?php
function calcularRendimento($p, $taxa, $meses)
{
    if ($meses == 1) 
        return $p * (1 + $taxa);
    return ($p + calcularRendimento($p, $taxa, $meses - 1)) * (1 + $taxa);
}
// Teste
echo calcularRendimento(100, 0.1, 2);

/*
Aqui acontece o principal:
1. Calcula o saldo do mês anterior
2. Soma com o depósito atual
3. Aplica juros sobre tudo 
*/