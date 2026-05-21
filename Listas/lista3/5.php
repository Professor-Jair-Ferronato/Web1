<?php
$massa = 1.0; // Massa inicial
$tempo = 0;

while ($massa >= 0.10) {
    $massa *= 0.75; // Perde 25%, sobra 75%
    $tempo += 30;
}
echo "Tempo necessário: $tempo segundos.";
?>
