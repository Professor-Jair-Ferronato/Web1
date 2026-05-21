<?php

function calcularFatorial($n)
{
    if ($n <= 1) 
        return 1;
    return $n * calcularFatorial($n - 1);
}
// Teste
echo calcularFatorial(5);
