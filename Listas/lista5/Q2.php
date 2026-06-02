<?php
// Exemplo de acesso: processa.php?valor=1500.5
$valor = $_GET['valor'];
echo "Valor Formatado: R$ " . number_format($valor, 2, ',', '.');
?>