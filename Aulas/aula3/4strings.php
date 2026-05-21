<?php
/*
 * AULA 3 - Tópico 4: Funções de String
 * --------------------------------------
 * PHP possui diversas funções nativas para manipular textos (strings).
 * Neste exemplo usamos:
 *  - strlen()        : retorna o número de caracteres de uma string
 *  - str_word_count(): conta quantas palavras há na string
 *  - str_contains()  : verifica se uma substring existe dentro de outra (sensível a maiúsculas)
 *  - strtoupper()    : converte todos os caracteres para maiúsculas
 *  - strtolower()    : converte todos os caracteres para minúsculas
 *  - str_replace()   : substitui uma parte da string por outro texto
 */
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