<?php

function tempoDeVoo($combustivel)
{
    $totalSegundos = ($combustivel / 12) * 60;
    $min = floor($totalSegundos / 60);
    $seg = $totalSegundos % 60;
    return "$min minutos e $seg segundos";
}
// Teste
echo tempoDeVoo(30);
