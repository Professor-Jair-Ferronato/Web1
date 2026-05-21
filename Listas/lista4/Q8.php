<?php

function areaRetangulo($largura, $altura)
{
    $area = $largura * $altura;
    return "A área do retângulo de dimensões {$largura}x{$altura} é {$area} unidades.";
}
// Teste
echo areaRetangulo(5, 10);
