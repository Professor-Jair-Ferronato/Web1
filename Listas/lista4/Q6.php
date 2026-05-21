<?php

function formatarBRL($valor)
{
    return "R$ " . number_format($valor, 2, ',', '.');
}
// Teste
echo formatarBRL(1500.5);
