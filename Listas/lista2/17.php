<?php
$a = 5;
$b = 5;
$c = 5;
if ($a == $b && $b == $c) {
    echo "Equilátero";
} elseif ($a == $b || $a == $c || $b == $c) {
    echo "Isósceles";
} else {
    echo "Escaleno";
}
?>
