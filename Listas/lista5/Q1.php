<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Classificação: Baixo peso";
} elseif ($imc <= 24.9) {
    echo "Classificação: Peso adequado";
} else {
    echo "Classificação: Sobrepeso";
}
