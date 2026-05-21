<?php
    $x = 5;
    $y = "John";
    $z = 6.5;
    $v = true;
    $n = null;

    echo "$x | $y | $z | $v | $n";
    echo "<BR>";
    var_dump($x);
    var_dump($y);
    var_dump($z);
    var_dump($v);
    var_dump($n);

    $a = $b = $c = "IFPR";
    echo "$a $b $c";

    var_dump($x);
    $x = (string) $x;
    var_dump($x);

?>