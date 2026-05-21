<?php
$nome = "João Silva";
$peso = 80;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) $class = "Abaixo do peso";
elseif ($imc <= 24.9) $class = "Peso normal";
elseif ($imc <= 29.9) $class = "Sobrepeso";
else $class = "Obesidade";

echo "Nome: $nome\nIMC: " . round($imc, 2) . "\nClassificação: $class";
?>
