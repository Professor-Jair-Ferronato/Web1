<?php
$vetor = [12, 7, 20, 15, 3];
foreach ($vetor as $v) {
    $tipo = ($v % 2 == 0) ? "par" : "ímpar";
    echo "$v é $tipo\n";
}
?>
