<?php
    $frase = "Hello World";
    $tam = strlen($frase);
    echo "A frase: $frase tem $tam caracteres<BR>";
    $palavras = str_word_count($frase);
    echo "$palavras palavras na frase $frase<BR>";
    $txt1 = "I really love PHP<BR>";
    var_dump(str_contains($txt1, "Love"));
    echo strtoupper($txt1);
    echo strtolower($txt1);
    echo str_replace("World","Ocean",$frase);
?>