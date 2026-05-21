<?php
$nums = [10, -5, 3, -2, 8, 12, -1, 0, 4, -10];
$somaPositivos = 0;
$contNegativos = 0;

foreach ($nums as $n) {
    if ($n > 0) $somaPositivos += $n;
    elseif ($n < 0) $contNegativos++;
}
echo "Soma positivos: $somaPositivos. Total negativos: $contNegativos.";
?>
