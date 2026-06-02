<?php
$valor_total = $_POST['valor_total'];
if ($valor_total > 500) {
    $valor_final = $valor_total * 0.85; // 15% de desconto
} elseif ($valor_total >= 200) {
    $valor_final = $valor_total * 0.90; // 10% de desconto
} else {
    $valor_final = $valor_total;
}
echo "Valor final com desconto: R$ " . number_format(
    $valor_final,2,',','.'
);
