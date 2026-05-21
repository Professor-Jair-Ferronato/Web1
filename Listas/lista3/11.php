<?php
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$b = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$naoComuns = [];

foreach ($a as $v) {
    if (!in_array($v, $b)) 
        $naoComuns[] = $v;
}
foreach ($b as $v) {
    if (!in_array($v, $a)) 
        $naoComuns[] = $v;
}

print_r($naoComuns);
?>


<!-- <?php
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$b = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14];

$naoComuns = array_merge(
    array_diff($a, $b),
    array_diff($b, $a)
);

print_r($naoComuns);
?> -->