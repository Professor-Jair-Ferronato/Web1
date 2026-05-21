<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) 
        return "Baixo peso";
    elseif ($imc < 25) 
        return "Peso adequado";
    return "Sobrepeso";
}
// Testes
echo calcularIMC(50, 1.70) . "\n";
echo calcularIMC(70, 1.70) . "\n";
echo calcularIMC(90, 1.70) . "\n";
