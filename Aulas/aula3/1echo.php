<?php
    echo "<h2>PHP é divertido!</h2>";
    echo "I'am student<BR>";
    echo "Estamos","aprendendo","PHP","!";
    echo "<BR>";
    $txt1 = "Aprendendo PHP";
    $txt2 = "IFPR Curitiba";
    echo '<h4>' . $txt1 . '</h4>';
    echo '<p>Estudando no ' . $txt2 . '</p>';
    $x = "Hello World";
    var_dump($x);
    $x = null;
    var_dump($x);

    echo "<BR>";
    echo "<p>Usando aspas duplas</p>";
    echo "<pre>";
    $nome = "Jair";
    echo "Olá $nome\n";
    echo "\tComo você está?\n";
    echo "</pre>";

    echo "<p>Usando aspas simples</p>";
    echo "<pre>";
    echo 'Olá $nome\n';
    echo '\tComo você está?\n';
    echo "</pre>";
?>