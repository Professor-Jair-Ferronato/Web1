<?php
/*
 * AULA 3 - Tópico 2: Variáveis e Tipos de Dados
 * ----------------------------------------------
 * Em PHP, variáveis são declaradas com o símbolo $ seguido do nome.
 * PHP é uma linguagem de tipagem dinâmica: o tipo é definido automaticamente
 * conforme o valor atribuído. Os tipos básicos são:
 *  - int    : número inteiro (ex: 5)
 *  - string : texto (ex: "John")
 *  - float  : número decimal (ex: 6.5)
 *  - bool   : verdadeiro/falso (true/false)
 *  - null   : ausência de valor
 * A função var_dump() exibe o tipo e o valor da variável.
 * É possível converter (cast) um tipo para outro: (string) $x
 */
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