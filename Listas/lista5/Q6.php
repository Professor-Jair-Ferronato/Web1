<?php
$deposito = $_POST['deposito'];
$taxa = $_POST['taxa']; // Ex: 0.01 para 1%
$meses = $_POST['meses'];
$saldo = 0;
for ($i = 1; $i <= $meses; $i++) {
    $saldo = ($saldo + $deposito) * (1 + $taxa);
}
echo "Saldo acumulado após $meses meses: R$ " . number_format(
    $saldo,2,',','.');
