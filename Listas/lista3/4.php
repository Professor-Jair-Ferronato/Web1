<!-- <?php
$chico = 1.50;
$juca = 1.10;
$anos = 0;

while ($juca <= $chico) {
    $chico += 0.02;
    $juca += 0.03;
    $anos++;
}
echo "Serão necessários $anos anos.";
?> -->

<?php
$chico = 150; // cm
$juca = 110;  // cm
$anos = 0;

while ($juca <= $chico) {
    $chico += 2; // cresce 2 cm/ano
    $juca += 3;  // cresce 3 cm/ano
    $anos++;
}

echo "Serão necessários $anos anos.";
?>