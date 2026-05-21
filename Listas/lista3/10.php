<?php
$vetor = [5, 12, 8, 25, 3, 10, 14, 2, 18, 7];
$maior = $vetor[0];
$menor = $vetor[0];
$pares = 0;
$soma = 0;

foreach ($vetor as $v) {
    if ($v > $maior) $maior = $v;
    if ($v < $menor) $menor = $v;
    if ($v % 2 == 0) $pares++;
    $soma += $v;
}

echo "Maior: $maior, Menor: $menor\n";
echo "Percentual pares: " . (($pares / 10) * 100) . "%\n";
echo "Média: " . ($soma / 10);
?>
